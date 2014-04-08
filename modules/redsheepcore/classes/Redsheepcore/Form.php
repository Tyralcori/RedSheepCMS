<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepform
 * Handles form listing
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/04/08
 */
class Redsheepcore_Form {

    /**
     * Load all ORM datas
     * @param type $section
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function generate($section = null, $options = null) {
        // If empty, oh gawd, everything bad
        if (empty($section)) {
            return false;
        }
        
        // Empty option
        if(empty($options)) {
            $options = array();
        }
        
        // Fake section
        $sectionSpecial = false;
        
        // Refix section
        if(!empty($options) && is_array($options) && !empty($options['viewport'])) {
            $sectionSpecial = $options['viewport'];
        }
        
        // Get request object
        $requestObject = Redsheepcore::getRequestObject();

        // Post Data
        $postData = Redsheepcore_Data::run($requestObject->post());
        
        // Get post Data
        if(isset($options['allowHTML']) && !empty($options['allowHTML'])) {
            $postData = $requestObject->post();
        }
        
        // Check, if "new" element is given
        if(isset($_GET) && is_array($_GET)) {
            $isNew = isset($_GET['new']) ? $_GET['new'] : '';
            $isSave = isset($_GET['saveConfig']) ? $_GET['saveConfig'] : '';
        }    
        
        // If post Data, save / create / whatever
        if(!empty($postData) && is_array($postData) && !$isSave) {            
            // Save
            self::save($section, $postData, $options);
        }

        // Get current URI
        $_uri = Request::detect_uri();            
        
        // Set special ID
        $specialID = (int) str_replace('backend' . ($sectionSpecial ? $sectionSpecial : $section), '', str_replace('/', '', $_uri));

        if (!empty($specialID)) {
            // Load ORM Datas WHERE!
            $loadORM = ORM::factory($section)->where('id', '=', $specialID)->find()->as_array();
        } else {
            // Load ORM Datas
            $loadORM = ORM::factory($section)->find_all()->as_array();
        }
        
        // Save plugin if plugin
        if(isset($isSave) && !empty($isSave)) {
            $configPlugin = Pluginmanager::saveedit($specialID, $postData);
        }
        
        // If additional infos are not empty, get this
        if(isset($options['add']) && !empty($options['add']) && isset($loadORM['name']) && !empty($loadORM['name'])) {
            foreach($options['add'] as $key => $value) {
                foreach($value as $cKey => $cValue) {
                    $loadORM['additional'] = $key::$cKey($loadORM[$cValue[0]]);
                }                
            }
        }

        // if not empty and is array, everything fine, isn't it?
        if (!empty($loadORM) && is_array($loadORM) && empty($isNew)) {
            // Template have to be noticed about the datas
            Redsheepcore::setTemplate('formDataValues', $loadORM);
            
            // Template needs columns
            Redsheepcore::setTemplate('formDataColumns', self::getAllColumns($section));
        }
        
        // If option is given
        if(!empty($options) && is_array($options)) {
            // Set important val
            Redsheepcore::setTemplate('formDataSection', $section);

            // Iterate all elements
            foreach($options as $key => $option) {
                // Set options
                Redsheepcore::setTemplate('formData_' . $key, $option);
                
                // Check viewport
                if($key == 'viewport') {
                    // Redeclare viewport
                    Redsheepcore::setTemplate('formDataSection', $option);
                }
                
                // Special -hide handling
                if($key == 'hide') {
                    // Get columns
                    $columns = self::getAllColumns($section);
                    
                    // Iterate hide elements
                    foreach($option as $key => $ignore) {
                        // Unset hide elements
                        unset($loadORM[$ignore]);
                        
                        // Unset columns
                        if(in_array($ignore, $columns)) {
                            foreach($columns as $cKey => $cValue) {
                                if($cValue == $ignore) {
                                    unset($columns[$cKey]); 
                                }
                            }
                        }
                    }
                    
                    // Update Value
                    Redsheepcore::setTemplate('formDataValues', $loadORM);
                    
                    // Update Column
                    Redsheepcore::setTemplate('formDataColumns', $columns);
                }                
            }
        }
        
        // If is new, create empty template
        if($isNew) {
            // Template have to be noticed about the datas
            $loadORM = ORM::factory($section);
            $loadORM->id = 'new';
            Redsheepcore::setTemplate('formDataValues', $loadORM);
        }

        // All fine
        return $loadORM;
    }
    
    /**
     * Returns all columns listed
     * @param type $section
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    private static function getAllColumns($section = null) {
        // Must not be empty
        if(empty($section)) {
            return false;
        }
        
        // Declare ORM
        $currentORM = ORM::factory($section);
       
        // Set list
        $list = array();
        
        // Fill list by columns
        foreach($currentORM->list_columns() as $key => $value) {
            $list[] = $key;
        }
        
        // Return list, if is okay
        if(!empty($list) && is_array($list)) {
            return $list;
        }
        
        // Something is wrong.. :<
        return false;
    }

    /**
     * Redirect site
     * @param type $section
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    private static function redirectTo($target = null) {
        // Section must not be empty
        if(empty($target)) {
            return false;
        }
        
        // Redirect by section
        header('Location: ' . str_replace('//', '/', URL::base() . $target));
        die();
    }
    
    /**
     * Save element by section
     * @param type $section
     * @param type $elements
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function save($section = null, $elements = null, $options = null) {
        // Elements must not be empty
        if(empty($section) || empty($elements) || !is_array($elements)) {
            return false;
        }
        
        // Simple do not update array - includes all keys / properties
        $doNotUpdate = array();
        
        // Check ignore and hide
        if(!empty($options) && is_array($options)) {
            // Set ignores
            if(!empty($options['ignore']) && is_array($options['ignore'])) {
                foreach($options['ignore'] as $key => $value) {
                    $doNotUpdate[] = $value;
                }
            }
            
            // Set hides
            if(!empty($options['hide']) && is_array($options['hide'])) {
                foreach($options['hide'] as $key => $value) {
                    $doNotUpdate[] = $value;
                }
            }      
            
            // Set redirect empty needle
            $reditectTo = false;
            
            // Check redirect
            if(!empty($options['redirect'])) {
                // Set, if given
                $reditectTo = $options['redirect'];
            } 
        }
        
        // Check ID needle
        if(!empty($elements['id']) && $elements['id'] != 'new') {
            // Set needle
            $givenID = (int) $elements['id'];
            
            // Load given values to update
            $currentORM = ORM::factory($section)->where('id', '=', $givenID)->find();
            
            // Set id (important for update)
            $currentORM->id = $givenID;            
        } else {
            // NO id given, new model
            $currentORM = ORM::factory($section);
        }
        
        // Iterate all given elements
        foreach($elements as $key => $value) {
            // Given, so continue
            if(in_array($key, $doNotUpdate)) {
                continue;
            }
            
            // Set orm
            $currentORM->$key = $value;
        }
      
        // Save ORM
        $currentORM->save();

        // Check redirectTo
        if($reditectTo) {
            // Redirect, if given
            self::redirectTo($reditectTo);
        }
        
        // Saved flag
        Redsheepcore::setTemplate('formDataMessage', 'Successfully saved.');
        
        // Some unsets (its safe)
        unset($_POST);
        
        
        // Yaaay. Party.
        return true;
    }

}

?>