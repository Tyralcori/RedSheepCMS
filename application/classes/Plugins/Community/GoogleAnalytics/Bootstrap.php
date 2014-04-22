<?php

/**
 * Description of Google Analytics Plugin
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/22
 */
class Plugins_Community_GoogleAnalytics_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/22
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
     * @since 2014/04/22
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }

    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/22
     */
    public static function style() {
        return false;
    }

    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/22
     */
    public static function script() {
        return false;
    }

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/22
     */
    public static function getMeta() {
        return array(
            'name' => 'GoogleAnalytics',
            'description' => 'Google Analytics Interface for RedSheep Studios CMS',
            'version' => '1.0.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }
    
    /**
     * Return config elements
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function getConfig() {
        return array(
            0 => array(
                'label' => 'Google Analytics Account',
                'name' => 'gaAccount',
                'type' => 'STRING',
                'required' => true,
                'default' => '',
            ),
        );
    }

    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function install() {
        // Staticsite create        
        $staticSite = ORM::factory('staticsite');
        $staticSite->name = 'privacy';
        $staticSite->text = file_get_contents(__DIR__ . '/install/overview.html');
        $staticSite->save();

        // StaticSite Id
        $getLastStaticSiteID = ORM::factory('staticsite')->where('name', '=', 'privacy')->find();

        // Viewport create
        $viewport = ORM::factory('viewport');
        $viewport->name = 'privacy';
        $viewport->link = '/privacy';
        $viewport->type = 'staticsite';
        $viewport->typeID = $getLastStaticSiteID->id;
        $viewport->isActive = 1;
        $viewport->position = 'bottom';
        $viewport->save();
    }

    /**
     * UnInstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function uninstall() {
        // Destroy staticsite
        $staticSite = ORM::factory('staticsite')->where('name', '=', 'privacy')->find();
        $staticSite->delete();

        // Destroy viewport
        $viewport = ORM::factory('viewport')->where('name', '=', 'privacy')->find();
        $viewport->delete();
    }
}
