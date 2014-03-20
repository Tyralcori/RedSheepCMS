<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepcron
 * Execute all the active crons!
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/03/20
 */
class Redsheepcore_Cron {

    /**
     * Execute subscribe
     * @param type $subscribe
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public static function execute() {
        // Get all active crons
        $cronList = ORM::factory('cron')->where('isActive', '=', 1)->find_all()->as_array();

        // Iterate all crons
        foreach ($cronList as $key => $cron) {
            // If errors, bool is true
            $isDamaged = false;

            // Get currend datetime
            $startTimeUntouched = new DateTime('now');
            $startTime = new DateTime('now');
            
            // Add interval
            $startTime->modify("-$cron->interval seconds");

            // Thats the modified date
            $modified = $startTime->format("Y-m-d H:i:s");
            $unmodified = $startTimeUntouched->format("Y-m-d H:i:s");
            
            // If modified newer than last executed end, execute?!
            if ($modified > $cron->lastEnd) {
                // Set new cron to update
                $cronExecute = ORM::factory('cron')->where('name', '=', $cron->name)->find();

                // Get plugin
                $pluginExecute = ORM::factory('plugin')->where('id', '=', $cron->executePluginID)->find();

                // Plugin not found?
                if (empty($pluginExecute->name)) {
                    $cronExecute->message = 'Plugin not found';
                    $cronExecute->isActive = 0;
                    $isDamaged = true;
                }

                // Check, if plugin is okay, after empty check name
                if (!$isDamaged) {
                    // Set plugin class
                    $currentPluginClass = 'Plugins_' . $pluginExecute->section . '_' . $pluginExecute->name . '_Bootstrap';

                    // Check if function in class is given / executeable
                    if (!method_exists($currentPluginClass, $cron->executeFunction)) {
                        $cronExecute->message = 'Function in plugin not found';
                        $cronExecute->isActive = 0;
                        $isDamaged = true;
                    }
                }

                // Set modified lastStart and end
                $cronExecute->lastStart = $unmodified;
                $cronExecute->lastEnd = '0000-00-00 00:00:00';
                
                // Save new datas
                $cronExecute->save();


                // Check, of plugin is okay, after check function in plugin
                if (!$isDamaged) {
                    // Get currend datetime
                    $endTime = new DateTime('now');

                    // Format the new endtime date
                    $newDate = $endTime->format("Y.m.d H:i:s");
                    
                    // Set action to execute
                    $cronAction = $cron->executeFunction;

                    // Set cron returns
                    $cronExecute->message = $currentPluginClass::$cronAction();
                    $cronExecute->lastEnd = $newDate;
                    
                    // Save!
                    $cronExecute->save();
                }
            }
        }
    }

}

?>
