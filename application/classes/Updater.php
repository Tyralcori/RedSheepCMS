<?php

/**
 * Description of Updater
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Updater extends Controller {

    /**
     * Real version
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    protected static $_latestVersion = '0.6.0';

    /**
     * Versions
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_version = array();

    /**
     * Version prefix
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    const versionPrefix = 'Updates_';

    /**
     * Magic
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public function __construct() {
        
    }

    /**
     * Installer / updater / whatever
     * @param type $version
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function checkVersion($version = null) {
        // Update construct
        self::$_version = array(
            'current' => array(
                'full' => $version,
                'numeric' => (int) str_replace('.', '', $version),
            ),
            'origin' => array(
                'full' => self::$_latestVersion,
                'numeric' => (int) str_replace('.', '', self::$_latestVersion),
            )
        );

        // Update 
        self::doUpdates();
    }

    /**
     * Installer / updater / whatever HANDLE
     * @param type $version
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function doUpdates() {
        // Check, if installed
        if (self::$_version['current']['full'] === 'none' || self::$_version['current']['numeric'] === 0) {
            $updateClass = self::versionPrefix . "Installer";
        } else {
            $updateClass = str_replace('.php', '', self::versionPrefix . self::getAvailableUpdates());
        }

        // Update start!
        if ($updateClass && self::getAvailableUpdates() && (self::$_version['current']['numeric'] < self::$_version['origin']['numeric'])) {
            // Start updates
            $status = $updateClass::startUpdate();
        }

        // Execute recursiv
        if (!empty($status) && !empty($status['status'])) {
            // Update dir
            $UPDATE_DIR = APPPATH . 'classes/Updates/';
            
            rename($UPDATE_DIR.self::getAvailableUpdates(), $UPDATE_DIR."Archiv/".self::getAvailableUpdates());
            
            self::checkVersion($status);
        }

        return false;
    }

    /**
     * Get all the updates! (Only 1..)
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static function getAvailableUpdates() {
        // Update dir
        $UPDATE_DIR = APPPATH . 'classes/Updates';

        // If is okay and readable
        if (is_dir($UPDATE_DIR) && is_readable($UPDATE_DIR)) {
            // Set updates
            $updates = scandir($UPDATE_DIR);

            // Ignore following
            $ignoreUpdates = array('.', '..', 'Archiv', 'Interface.php');

            // Return first possible update
            foreach ($updates as &$update) {
                if (in_array($update, $ignoreUpdates)) {
                    unset($update);
                } else {
                    return $update;
                }
            }
        }
    }

}

?>
