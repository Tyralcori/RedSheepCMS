<?php

/**
 * Description of RedSheepStore
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/31
 */
class Plugins_Core_RedSheepStore_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/31
     */
    public static function index() {
        return array(
            'status' => 'success',
            'message' => array(
                'view' => self::view(),
                'isOnly' => true,
                'style' => self::style(),
                'script' => self::script(),
            )
        );
    }

    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/31
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }
    
    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/02
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/store.css');

        return $cssPath;
    }
    
    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/02
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/store.js');

        return $jsPath;
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

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/31
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepStore',
            'description' => 'RedSheep Store Plugin',
            'version' => '0.4.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }

}
