<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Backend
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Controller_Backend extends Controller_Redsheep {
    
    /**
     * Backend Index
     * @param type $config
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public function action_index() {
        // Get version
        $version = Redsheepcore::getConfig('version') ? Redsheepcore::getConfig('version') : 'default';

        // Check if update / installation
        Updater::checkVersion($version);
        
        // Register all plugins
        Pluginmanager::register();
    }
    
    /**
     * Backend Cron
     * @param type $config
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public function action_cron() {
        Redsheepcore_Cron::execute();
        die("CRON");
    }
}

?>
