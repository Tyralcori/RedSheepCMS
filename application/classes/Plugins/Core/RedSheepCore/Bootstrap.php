<?php

/**
 * Description of RedSheepCore
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Plugins_Core_RedSheepCore_Bootstrap extends Controller implements Plugins_Interface {
    
    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
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
     * @since 2014/04/07
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');
        
        return $template;
    }
    
    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function style() {
        return false;
    }
    
    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function script() {
        return false;
    }
    
    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepCore',
            'description' => 'RedSheep Core Plugin',
            'version' => '0.9.3',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }
    
    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function install () {
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
}
