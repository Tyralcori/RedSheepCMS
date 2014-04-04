<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepwatchdog
 * Something is wrong? Simple logger
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/04/03
 */
class Redsheepcore_Watchdog {

    /**
     * LOG GETTER
     * @param type $type
     * @param type $key
     * @param type $period
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     * @todo Integrate period in watchdog e.g. "7days,3years,yesterday, or Datetimes from - to) 
     */
    public static function getLog($type = null, $key = null, $period = null) {
        // Check if type is given
        if (!empty($type)) {
            // If key, return key in type
            if (!empty($key)) {
                 return ORM::factory('watchdog')->where('type', '=', $type)->and_where('key', '=', $key)->find_all()->as_array();
            }
            // Else return whole type
            return ORM::factory('watchdog')->where('type', '=', $type)->find_all()->as_array();
        }
        // Return all
        return ORM::factory('watchdog')->find_all()->as_array();
    }

    /**
     * LOG SETTER
     * @param type $type
     * @param type $key
     * @param type $value
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function setLog($type, $key, $value) {
        // Check if type, key, value is empty
        if (empty($type) || empty($key) || empty($value)) {
            return array('status' => 'failure', 'message' => 'Type: $type, Key: $key, Value: $value - not supported');
        }

        // Create new 
        $watcher = ORM::factory('watchdog');
        $watcher->type = $type;
        $watcher->key = $key;
        $watcher->value = $value;
        $watcher->datetime = self::helper_getDatetime();
        $watcher->save();
        
        // OK
        return true;
    }
        
    /**
     * Returns current date
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     * @todo: Maybe a function for returns current date is overpowerd. May add some nice functions
     */
    private static function helper_getDatetime() {
        return date('Y-m-d H:i:s');
    }

}

?>
