<?php

/**
 * Description of Pluginmanager
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Pluginmanager extends Controller {

    /**
     * Magic
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public function __construct() {
        
    }

    /**
     * Contains all informations from a plugin we need
     * @param type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    protected static $pluginMetaData = array('name', 'description', 'added', 'installedOn', 'version', 'publisher', 'publisherHomepage', 'section');

    /**
     * Contains all plugins, found in register process
     * @param type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    private static $_pluginsFound = array();

    /**
     * PluginsFound getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public static function getPlugins($key = null) {
        if (!empty($key)) {
            return self::$_pluginsFound[$key];
        }
        return self::$_pluginsFound;
    }

    /**
     * PluginsFound setter
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public static function setPlugins($key = null, $value = null) {
        if (!empty($value)) {
            self::$_pluginsFound[$key][] = $value;
        }
    }

    /**
     * Register all given plugins
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function register() {
        // Plugin directory
        $pluginDir = APPPATH . 'classes/Plugins/';

        // Ignore following content dir
        $givenDenyList = array('.', '..',);

        // Scan following spaces
        $allowedSpaces = array('Core', 'Community', 'Local');

        // Scan all spaces
        foreach ($allowedSpaces as $key => $currentSpace) {

            // Add space to pluginDir if given and not empty
            if (!empty($currentSpace)) {
                // Deny double slash (if space is, whyever, empty)
                $pluginDir .= $currentSpace . '/';
            }

            // If plugindir incl. space is dir and readable, catch em all
            if (is_dir($pluginDir) && is_readable($pluginDir) && !empty($currentSpace)) {
                // Scan the dir
                $foundPlugins = scandir($pluginDir);

                // Check return
                if (!empty($foundPlugins) && is_array($foundPlugins)) {
                    // Iterate all the plugins 
                    foreach ($foundPlugins as $pluginKey => $pluginValue) {

                        // Continue plugins like "." (one of my best plugins! You maybe also like ".."). 
                        if (in_array($pluginValue, $givenDenyList)) {
                            continue;
                        }

                        // Get plugin meta datas
                        $pluginMetaDatasTemp = self::getMeta($currentSpace, $pluginValue);
                        $pluginMetaDatas = array();

                        // Set meta datas
                        if (!empty($pluginMetaDatasTemp['message']) && is_array($pluginMetaDatasTemp['message'])) {
                            $pluginMetaDatas = $pluginMetaDatasTemp['message'];
                        }

                        // Plugin model
                        $plugin = ORM::factory('plugin')->where('name', '=', $pluginValue)->find();

                        // Register only new plugins
                        if(!empty($plugin->version)) {
                            continue;
                        }

                        // Foreach meta data update or create new
                        foreach (self::$pluginMetaData as $metaKey => $metaValue) {
                            // If propertie not empty, update
                            if (!empty($pluginMetaDatas[$metaValue])) {
                                $plugin->$metaValue = $pluginMetaDatas[$metaValue];
                            }
                            // Save changed / new plugin
                            $plugin->save();
                        }


                        // Add plugin into "container"
                        self::setPlugins($currentSpace, $pluginMetaDatas);
                    }
                }
            }
        }
        
        // Return plugins
        return self::getPlugins();
    }

    /**
     * Get most important meta datas from plugin.
     * @param type $pluginName
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    private static function getMeta($space = null, $pluginName = null) {
        // Empty plugins / spaces not allowed.
        if (empty($pluginName) || empty($space)) {
            return false;
        }

        // Plugin directory
        $pluginDir = APPPATH . 'classes/Plugins/';

        // Create new plugin dir
        $currentPluginDir = $pluginDir . $space . '/' . $pluginName . '/';

        // Check if plugin is okay
        if (is_dir($currentPluginDir) && is_readable($currentPluginDir) && is_file($currentPluginDir . 'Bootstrap.php') && is_readable($currentPluginDir . 'Bootstrap.php')) {
            // Plugin class
            $currentPluginClass = 'Plugins_' . $space . '_' . $pluginName . '_Bootstrap';

            // Get meta data
            $pluginMeta = $currentPluginClass::getMeta();

            // Additionals
            $pluginMeta['section'] = $space;

            // Return all
            return array('status' => 'success', 'message' => $pluginMeta);
        }

        return array('status' => 'failure', 'message' => "Plugin $pluginName could not be loaded. Something went wrong.");
    }

    /**
     * Load all active Plugins (optional by space)
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function load($space = null) {
        // Load model
        $pluginModel = ORM::factory('plugin');

        // Plugin directory
        $pluginDir = APPPATH . 'classes/Plugins/';


        if (!empty($space) && ($space == 'frontend' || $space == 'backend')) {
            // Get all active plugins by space
            $activePlugins = $pluginModel->where('active', '=', 1)->and_where('space', '=', $space)->find_all();
        } else {
            // Get all active plugins
            $activePlugins = $pluginModel->where('active', '=', 1)->find_all();
        }

        // If we have no active plugins, return
        if (!count($activePlugins)) {
            return array('status' => 'success', 'message' => 'No active plugins');
        }

        // Create an plugin container
        $pluginContainer = array();


        // Execute every active plugin
        foreach ($activePlugins as $key => $activePlugin) {
            // Start time
            $pluginContainer[$activePlugin->name]['startTime'] = time();

            // Set meta datas
            foreach (self::$pluginMetaData as $keyMeta => $valueMeta) {
                $pluginContainer[$activePlugin->name][$valueMeta] = $activePlugin->$valueMeta ? $activePlugin->$valueMeta : 'Not given';
            }

            // Execute index
            $currentPluginDir = $pluginDir . $activePlugin->section . '/' . $activePlugin->name . '/';

            if (is_dir($currentPluginDir) && is_readable($currentPluginDir) && is_file($currentPluginDir . 'Bootstrap.php') && is_readable($currentPluginDir . 'Bootstrap.php')) {
                $currentPluginClass = 'Plugins_' . $activePlugin->section . '_' . $activePlugin->name . '_Bootstrap';
                $pluginContainer[$activePlugin->name]['return'] = $currentPluginClass::index();
                $pluginContainer[$activePlugin->name]['status'] = 'success';
            } else {
                $pluginContainer[$activePlugin->name]['return'] = 'Can not execute. Make sure, plugin exists and is readable.';
                $pluginContainer[$activePlugin->name]['status'] = 'failure';
            }
            // End time
            $pluginContainer[$activePlugin->name]['endTime'] = time();
        }

        // Return plugin container
        if (!empty($pluginContainer) && is_array($pluginContainer)) {
            return array('status' => 'success', 'message' => $pluginContainer);
        }

        // Something wrong
        return array('status' => 'success', 'message' => 'Plugins can not be loaded / executed.');
    }

}

?>
