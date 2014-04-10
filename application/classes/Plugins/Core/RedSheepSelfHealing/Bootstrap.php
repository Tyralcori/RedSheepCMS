<?php

/**
 * Description of RedSheepSelfHealing
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/10
 */
class Plugins_Core_RedSheepSelfHealing_Bootstrap extends Controller implements Plugins_Interface {
    
    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function index() {
        return array(
            'status' => 'success', 
            'message' => array(
                'view' => self::view(),
            )
        );
    }
    
    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');
        
        return $template;
    }
    
    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function style() {
        return false;
    }
    
    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function script() {
        return false;
    }
    
    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepSelfHealing',
            'description' => 'RedSheepSelfHealing',
            'version' => '0.5.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }
    
    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function install () {
        // Get plugin
        $plugin = ORM::factory('plugin')->where('name', '=', 'RedSheepSelfHealing')->find();
        
        // Check id!
        if(!empty($plugin->id)) {
            // Set cron properties
            $newCron = ORM::factory('cron');
            $newCron->name = 'SelfHealing';
            $newCron->executePluginID = $plugin->id;
            $newCron->executeFunction = 'checkHealth';
            $newCron->interval = 600;
            $newCron->isActive = 1;

            // Save cron
            $newCron->save();
            return true;
        }
        
        return false;
    }
    
    /**
     * Uninstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function uninstall() {
        // Find all crons
        $cron = ORM::factory('cron')->where('name', '=', 'SelfHealing')->find();
        
        // Check id 
        if(!empty($cron->id)) {
            // Delete all the crons
            $cron->delete();
            return true;
        }
        
        return false;
    }
    
    /**
     * Returns config
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function getConfig() {
        return array();
    }
    
    /**
     * Check health / fix broken parts, creates log
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    public static function checkHealth() {
        // Get timestamp, starting
        $startCheck = time();
        
        // Log container
        $healthContainer = array();
        
        // Check|Fix permissions
        $healthContainer['permission'] = self::checkPermissions();

        // Check|Fix database connection
        
        // Check|Fix database
        
        // Check|Fix models
        
        // Check|Fix important files (Core, Plugins, ..)
        
        // Check|Fix by "curl" if site is online
        
        // Write log / status
        
        // Get timestamp ending
        $endCheck = time();
        
        // Returns log / status
        return $healthContainer;
    }
    
    public static function checkPermissions() {
        $importantDirectorysToCheck = array(

        );
        
        $importantFilesToCheck = array(
            
        );
        
        
    }
}
