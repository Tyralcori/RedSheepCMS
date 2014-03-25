<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepdata
 * Make fine post & get
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/03/24
 */
class Redsheepcore_Data {

    /**
     * Postdata safe
     * @param type $arrayToCheck
     * @return boolean
     */
    public static function run($arrayToCheck = null) {
        // IF emtpy, problem
        if (empty($arrayToCheck)) {
            return false;
        }

        // Action
        self::iterate($arrayToCheck);
        
        // Return after iteration 
        return self::getData();
    }

    /**
     * Data hold
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    private static $_data = array();

    /**
     * Data getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    public static function getData($key = null) {
        if (!empty($key)) {
            return self::$_data[$key];
        }
        return self::$_data;
    }

    /**
     * Data setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    public static function setData($key = null, $value = null) {
        // If value is empty, but not the key, simple string add
        if (empty($value) && !empty($key)) {
            self::$_data = $key;
            // Both params not empty
        } elseif (!empty($value) && !empty($key)) {
            // Add value with given key
            // If is array, add by key in array
            if (is_array($value)) {
                if (is_array($key)) {
                    self::$_data[key($key)][$key[key($key)]][key($value)] = $value[key($value)];
                } else {
                    self::$_data[$key][key($value)] = $value[key($value)];
                }
            } else {
                // No Array, happy end
                self::$_data[$key] = $value;
            }
        }
    }

    /**
     * Make fine datas
     * @param type $requestData
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    public static function iterate($requestData, $keyParam = null) {
        // Return false, if empty
        if (empty($requestData)) {
            return false;
        }

        // Check, if is array, or not
        if (is_array($requestData)) {
            foreach ($requestData as $key => $value) {
                // If array in array, recursiv 
                if (is_array($value)) {
                    $giveKey = $keyParam ? array((is_array($keyParam) ? key($keyParam) : $keyParam) => $key) : $key;
                    self::iterate($value, $giveKey);
                } else {
                    // If recursive call
                    if (!empty($keyParam)) {
                        self::setData($keyParam, array($key => self::cleaner($value)));
                        // No recursive call, set data
                    } else {
                        self::setData($key, self::cleaner($value));
                    }
                }
            }
        } else {
            // No array, maybe a simple string
            self::setData(self::cleaner($requestData));
        }
    }

    /**
     * Clean a simple string with htmlentitie function
     * @param type $string
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    private static function cleaner($string = null) {
        // Please no empty strings
        if (empty($string)) {
            return false;
        }

        // Return clean string
        return (strlen(htmlentities($string)) > 0) ? (htmlentities($string)) : false;
    }

}

?>
