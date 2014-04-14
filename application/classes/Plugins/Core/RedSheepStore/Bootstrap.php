<?php

/**
 * Description of RedSheepStore
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/31
 */
class Plugins_Core_RedSheepStore_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/31
     */
    public static function index() {
        self::initStore();
        return array(
            'status' => 'success',
            'message' => array(
                'view' => self::view(),
                'isOnly' => true,
                'style' => self::style(),
                'script' => self::script(),
            )
        );
    }

    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/31
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }

    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/02
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/store.css');

        return $cssPath;
    }

    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/02
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/store.js');

        return $jsPath;
    }

    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function install() {
        return true;
    }

    /**
     * Uninstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function uninstall() {
        return true;
    }

    /**
     * Returns config
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function getConfig() {
        return array();
    }

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/31
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepStore',
            'description' => 'RedSheep Store Plugin',
            'version' => '0.4.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }

    /**
     * INIT the store (include handling)
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function initStore() {
        // Get current overview
        $request = Redsheepcore::getRequestObject();
        $_uri = $request::detect_uri();

        // Check plugin site
        $isPlugin = explode('plugin', $_uri);

        // Check if plugin is given
        if (is_array($isPlugin) && isset($isPlugin[1]) && !empty($isPlugin[1])) {
            // Make safe name
            $pluginName = Redsheepcore_Data::run(str_replace('/', '', $isPlugin[1]));

            // Check, if name is okay
            if (!empty($pluginName)) {
                // Get all infos bout the plugin
                $foundPlugin = ORM::factory('storeplugin')->where('name', '=', $pluginName)->find();

                // If id is okay, send it to template
                if (!empty($foundPlugin->id)) {
                    // Set topdownlaod plugins
                    Redsheepcore::setTemplate('detailedPlugin', $foundPlugin);
                }
            }
        }

        // Check plugin site
        $isDownload = explode('initDownload', $_uri);

        // Check if plugin is given
        if (is_array($isDownload) && isset($isDownload[1]) && !empty($isDownload[1])) {
            // Make safe name
            $pluginName = Redsheepcore_Data::run(str_replace('/', '', $isDownload[1]));

            // Check, if name is okay
            if (!empty($pluginName)) {
                // Set lib dir
                $libDIR = $_SERVER['SERVER_NAME'] . '/LIB';

                // Get whole plugin
                $infosAbout = ORM::factory('storeplugin')->where('name', '=', $pluginName)->find();

                // Set space
                $newSpace = $infosAbout->space;

                // First letter in uppercase
                $newSpace[0] = strtoupper($newSpace[0]);

                // Set download path
                $downloadPath = $libDIR . '/' . $newSpace . '/' . $infosAbout->name . '/' . $infosAbout->version . '.zip';

                // If id is okay, send it to template
                if (!empty($infosAbout->id)) {
                    // Set topdownlaod plugins
                    Redsheepcore::setTemplate('detailedPlugin', $infosAbout);
                }

                // Count download +1 
                $infosAbout->downloads = $infosAbout->downloads + 1;
                $infosAbout->save();

                // Set downloadURL
                Redsheepcore::setTemplate('downloadURL', $downloadPath);

                // Set topdownlaod plugins
                Redsheepcore::setTemplate('downloadMessage', "Thanks for downloading!");
            }
        }

        // Set topdownlaod plugins
        Redsheepcore::setTemplate('topPlugins', self::loadTopDownloads(5));
    }

    /**
     * Load top plugins by download
     * @param type $limit
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function loadTopDownloads($limit = 5) {
        // Top five download plugins
        $topPlugins = ORM::factory('storeplugin')->where('active', '=', 1)->order_by('downloads', 'DESC')->limit($limit)->find_all()->as_array();

        // Set top five plugins - sorted by downloads
        if (!empty($topPlugins) && is_array($topPlugins)) {
            // Set to template
            return $topPlugins;
        }

        return false;
    }

}
