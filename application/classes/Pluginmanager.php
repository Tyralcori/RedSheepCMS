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

        // Ignore following content dir
        $givenDenyList = array('.', '..',);

        // Scan following spaces
        $allowedSpaces = array('Core', 'Community', 'Local');

        // Scan all spaces
        foreach ($allowedSpaces as $key => $currentSpace) {

            // Plugin directory
            $pluginDir = APPPATH . 'classes/Plugins/';

            // Add space to pluginDir if given and not empty
            if (!empty($currentSpace)) {
                // Deny double slash (if space is, whyever, empty)
                $pluginDir .= $currentSpace . '/';
            }

            if (!is_dir($pluginDir)) {
                die("$pluginDir is no plugin directory");
            } elseif (!is_readable($pluginDir)) {
                die("$pluginDir is not readable");
            } elseif (empty($currentSpace)) {
                die("Pluginspace is empty");
            } else {
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
                        if (!empty($plugin->version)) {
                            continue;
                        }

                        // Foreach meta data update or create new
                        foreach (self::$pluginMetaData as $metaKey => $metaValue) {
                            // If propertie not empty, update
                            if (!empty($pluginMetaDatas[$metaValue])) {
                                $plugin->$metaValue = $pluginMetaDatas[$metaValue];
                            }

                            // Datetime
                            $plugin->added = date('Y-m-d H:i:s');

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
     * Install or uninstalls an pluin
     * @param type $pluginID
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function invert($pluginID = null) {
        // Must not be empty
        if (empty($pluginID)) {
            return false;
        }

        // Get all infos about the plugin
        $selectedPlugin = ORM::factory('plugin')->where('id', '=', $pluginID)->find();

        // Get active state
        $currentActiveState = (int) $selectedPlugin->active;

        // Invert default = 0 (not active)
        $invertedActiveState = 0;

        // Datetime
        $selectedPlugin->installedOn = '0000-00-00 00:00:00';

        // If not active, inverted = 1 (active)
        if ($currentActiveState === 0) {
            $invertedActiveState = 1;

            // Datetime
            $selectedPlugin->installedOn = date('Y-m-d H:i:s');
        }

        // Update the datas!
        $selectedPlugin->id = $selectedPlugin->id;
        $selectedPlugin->active = $invertedActiveState;

        // Save updated datas
        $selectedPlugin->save();

        // Generate new styles (css & js)
        Pluginmanager::generate();
        
        // Everything fine
        return true;
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

    /**
     * Generate CSS and JS Files, if not exists or plugin changed active
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/02
     */
    public static function generate() {
        // Declare required css / js pathes
        $assetDIR = array(
            'css' => $_SERVER['DOCUMENT_ROOT'] . '/assets/css/plugins.css',
            'js' => $_SERVER['DOCUMENT_ROOT'] . '/assets/js/plugins.js',
        );

        // Load all plugins
        $allPlugins = self::load();

        // Create everytime css & js file new
        foreach ($assetDIR as $key => $path) {
            try {
                $handle = fopen($path, "w+");
                fwrite($handle, "/** Automatic generated $key file **/");
                fclose($handle);
            } catch (Exception $e) {
                die($e);
            }
        }

        // Check if plugins must be generated
        if (empty($allPlugins) || !is_array($allPlugins) || empty($allPlugins['message']) || !is_array($allPlugins['message'])) {
            // Everything is fine
            return array('status' => 'success', 'message' => 'Files are okay');
        }

        // Iterate all given plugins
        foreach ($allPlugins['message'] as $key => $plugin) {
            // CSS
            if (!empty($plugin['return']['message']['style'])) {
                $handle = fopen($assetDIR['css'], "a");
                $pluginName = $plugin['name'];
                fwrite($handle, "\r\n/** Style for plugin $pluginName: Start **/\r\n");
                fwrite($handle, $plugin['return']['message']['style']);
                fwrite($handle, "\r\n/** Style for plugin $pluginName: END **/\r\n");
                fclose($handle);
            }
            // JS
            if (!empty($plugin['return']['message']['script'])) {
                $handle = fopen($assetDIR['js'], "w+");
                $pluginName = $plugin['name'];
                fwrite($handle, "\r\n/** Script for plugin $pluginName: Start **/\r\n");
                fwrite($handle, $plugin['return']['message']['script']);
                fwrite($handle, "\r\n/** Script for plugin $pluginName: END **/\r\n");
                fclose($handle);
            }
        }

        // Everything is fine
        return array('status' => 'success', 'message' => 'Files generated');
    }

}

?>
