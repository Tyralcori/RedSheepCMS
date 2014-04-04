<?php

/**
 * Description of RedSheepScrollTop
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/03
 */
class Plugins_Community_RedSheepScrollTop_Bootstrap extends Controller implements Plugins_Interface {
    
    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function index() {
        return array(
            'status' => 'success', 
            'message' => array(
                'view' => self::view(),
                'style' => self::style(),
                'script' => self::script(),
            )
        );
    }
    
    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');
        
        return $template;
    }
    
    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/scrollTop.css');

        return $cssPath;
    }
    
    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/scrollTop.js');

        return $jsPath;
    }
    
    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/03
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepScrollTop',
            'description' => 'Creates a little box "Scroll to top on bottom page"',
            'version' => '1.0.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }
}
