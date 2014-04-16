<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheeplang
 * Multilanguage!
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/04/16
 */
class Redsheepcore_Lang {

    /**
     * Load all the funny language parts
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function generate($language = null) {
        // Default language = en
        if (empty($language)) {
            $language = 'en';
        }

        // Set language in element
        self::setLanguage($language);

        // Set template
        $template = Redsheepcore::getTemplate();

        // Get all tranlation keys and their tranlsations
        $translated = self::translate(self::getTranslationKeys($template), $template);
    }

    /**
     * Translate all these small things
     * @param type $keys
     * @param type $template
     * @param type $paramKey
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    private static function translate($keys = null, $template = null) {
        // Nope. Both must not be empty
        if (empty($keys) || empty($template)) {
            return false;
        }

        // Every translation starts with %lang:'
        $patternStart = "%lang:'";

        // And ends with '%
        $patternEnd = "'%";

        // If template is no array
        if (is_array($template)) {
            // Iterate the template
            foreach ($template as $key => $value) {
                // Set template directly, because its no array
                $temp = Redsheepcore::getTemplate($key);

                // Replace every key
                foreach ($keys as $lKey => $lValue) {
                    $temp = str_replace($patternStart . $lKey . $patternEnd, $lValue, $temp);
                }

                // Set this key new
                Redsheepcore::setTemplate($key, $temp);
            }
        } else {
            // Set template directly, because its no array
            $temp = Redsheepcore::getTemplate($template);

            // Replace every key
            foreach ($keys as $lKey => $lValue) {
                $tempReplaced = str_replace($patternStart . $lKey . $patternEnd, $lValue, $temp);
            }

            // Set this key new
            Redsheepcore::setTemplate($template, $tempReplaced);
        }
    }

    /**
     * Language placehoder
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    private static $_lang;

    /**
     * Setter for language
     * @param type $lang
     * @return boolean
     */
    public static function setLanguage($lang = null) {
        // Must not be empty
        if (empty($lang)) {
            return false;
        }

        // Set language
        self::$_lang = $lang;
    }

    /**
     * Getter for language
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function getLanguage() {
        return self::$_lang;
    }

    /**
     * Holds some translations
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static $_holder;

    /**
     * Set translations in holder
     * @param type $key
     * @param type $value
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function setHolder($key = null, $value = null) {
        // Key must not be empty
        if (empty($key)) {
            return false;
        }

        // If value empty, set key into value, else use the key and set the value
        if (!empty($value)) {
            self::$_holder[$key] = $value;
        } else {
            self::$_holder[$key] = $key;
        }
    }

    /**
     * Getter for holder
     * @param type $key
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function getHolder($key = null) {
        // If key is given, and key is given in holder, return
        if (isset(self::$_holder[$key]) && !empty($key)) {
            return self::$_holder[$key];
        }

        // Else nothing
        return false;
    }

    /**
     * Getter for ALL holder
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function getAllHolder() {
        return self::$_holder;
    }

    /**
     * Get translations
     * @param type $template
     * @param type $key
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    private static function getTranslationKeys($template = null, $key = null) {
        // Template must not be empty
        if (empty($template)) {
            return false;
        }

        // If template is no array
        if (is_array($template)) {
            // Iterate the template
            foreach ($template as $key => $value) {
                // If iteration is array, recursive call with the key
                if (is_array($value)) {
                    // recursive call
                    self::getTranslationKeys($value, $key);
                } else {
                    // Set holder 
                    self::getCleanKeys($value);
                }
            }
        } else {
            // Set template directly, because its no array
            self::getCleanKeys($template);
        }

        return self::getAllHolder();
    }

    /**
     * Contains untranslated space
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    private static $_keysToTranslate = array();

    /**
     * Setter for KeysToTranslate
     * @param type $space
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function setKeysToTranslate($space = null) {
        // Space left must not be empty
        if (empty($space)) {
            return false;
        }

        self::$_keysToTranslate[] = $space;
    }

    /**
     * Getter for KeysToTranslate
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    public static function getKeysToTranslate() {
        return self::$_keysToTranslate;
    }

    /**
     * Get key and translation
     * @param type $text
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    private static function getCleanKeys($text = null) {
        // Must not be empty
        if (empty($text)) {
            return false;
        }

        // Every translation starts with %lang:'
        $patternStart = "%lang:'";

        // And ends with '%
        $patternEnd = "'%";

        // So explode on string with the startpattern
        $positions = explode($patternStart, $text);

        // If we have found the start pattern, position[1] must not be empty
        if (!empty($positions) && is_array($positions) && !empty($positions[1])) {
            // Now explode the pattern on endpattern for getting the key
            $key = explode($patternEnd, $positions[1]);

            // If we have an key, give it to the getTranslation
            if (!empty($key) && is_array($key) && !empty($key[0])) {
                // Set this up to the keys we have to translate
                self::setKeysToTranslate($key[0]);

                // Recursive call
                if (!empty($key[1])) {
                    // Set the palce we've forgotten
                    $patternLeft = '';

                    // Iterate the damned keys
                    foreach ($positions as $innerKey => $value) {
                        // Start at first (yes, we start counting by 0!
                        if ($innerKey < 1) {
                            continue;
                        }

                        // If second iteration, we have the following content left
                        if ($innerKey == 1) {
                            $patternLeft .= $key[1];
                            continue;
                        }

                        // Create new pattern that left
                        $patternLeft .= $patternStart . $value;
                    }

                    // Some keys left?
                    self::getCleanKeys($patternLeft);
                }
                // Gets translation
                return self::getTranslation(self::getKeysToTranslate());
            }
        }
    }

    /**
     * Get translation out of the table
     * @param type $key
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    private static function getTranslation($keys = null) {
        // Key must not be empty
        if (empty($keys)) {
            return false;
        }

        // Set key
        foreach ($keys as $keyInner => $key) {
            // If the key is known (exists in holder) we don't have to translate it again
            $isGiven = self::getHolder($key);

            // If not given, 
            if (!$isGiven) {
                // Get language (default "en" again)
                $lang = self::getLanguage() ? self::getLanguage() : 'en';

                // Get value
                $translation = ORM::factory('translation')->where('key', '=', $key)->and_where('langshort', '=', $lang)->find();

                // If value is not empty, return key and value in array
                if (!empty($translation->value)) {
                    self::setHolder($key, $translation->value);
                }
            }
        }

        // No translation needed
        return false;
    }

}

?>
