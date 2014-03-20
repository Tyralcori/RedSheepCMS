<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepevent
 * Handles events?
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/03/20
 */
class Redsheepcore_Event  {

    /**
     * Execute subscribe
     * @param type $subscribe
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public static function execute($subscribe = null, $type = null) {
 
        // No empty subscribes.
        if(empty($subscribe) || empty($type) || ($type != 'before' && $type != 'after')) {
            return false;
        }

        // Get all events to execute
        $eventsToExecute = ORM::factory('event')->where('eventSubscribe', '=', $subscribe)->and_where('eventType', '=', 'URI')->and_where('executeType', '=', $type)->order_by('level', 'asc')->find_all()->as_array();
        
        $returnContainer = array();
        
        // Execute event
        foreach($eventsToExecute as $key => $event) {
            // Get plugin infos
            $pluginModel = ORM::factory('plugin')->where('id', '=', $event->executePluginID)->find();
            
            // Check, if plugin found
            if(!empty($pluginModel->id)) {                
                // Set function name
                $functionName = $event->executeFunction;
                
                // Set class
                $currentPluginClass = 'Plugins_' . $pluginModel->section . '_' . $pluginModel->name . '_Bootstrap';
                
                // Check, if method given
                if(method_exists($currentPluginClass, $functionName)) {
                    // Execute
                    $returnContainer[$currentPluginClass][$functionName] = $currentPluginClass::$functionName(); 
                } else {
                    $returnContainer[$currentPluginClass][$functionName] = 'Not found.';
                }
            }
        }
        
        return $returnContainer;
    }

}

?>
