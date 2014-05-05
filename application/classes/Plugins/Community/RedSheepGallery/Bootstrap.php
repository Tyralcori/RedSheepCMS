<?php

/**
 * Description of RedSheepGallery
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/05/05
 */
class Plugins_Community_RedSheepGallery_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function index() {
        self::initGallery();
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
     * @since 2014/05/05
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }

    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/gallery.css');

        return $cssPath;
    }

    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/gallery.js');

        return $jsPath;
    }

    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function install() {
        return true;
    }

    /**
     * Uninstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function uninstall() {
        return true;
    }

    /**
     * Returns config
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function getConfig() {
        return array();
    }

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepGallery',
            'description' => 'RedSheep Gallery Plugin',
            'version' => '0.0.1',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }

    /**
     * INIT the gallery
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function initGallery() {
        // Get current overview
        $request = Redsheepcore::getRequestObject();
        $_uri = $request::detect_uri();

    }

}
