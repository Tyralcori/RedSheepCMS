<?php

/**
 * Description of RedSheepBugTracker
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/04
 */
class Plugins_Community_RedSheepBugTracker_Bootstrap extends Controller implements Plugins_Interface {
    
    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
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
     * @since 2014/04/04
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');
        
        return $template;
    }
    
    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/bugTracker.css');

        return $cssPath;
    }
    
    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/bugTracker.js');

        return $jsPath;
    }
    
    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepBugTracker',
            'description' => 'Simple BugTracker',
            'version' => '1.0.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
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
        $staticSite->name = 'bugtracker';
        $staticSite->text = '&nbsp;';
        $staticSite->save();
        
        // StaticSite Id
        $getLastStaticSiteID = ORM::factory('staticsite')->where('name', '=', 'bugtracker')->find();
        
        // Viewport create
        $viewport = ORM::factory('viewport');
        $viewport->name = 'bugtracker';
        $viewport->link = '/bugtracker';
        $viewport->type = 'staticsite';
        $viewport->typeID = $getLastStaticSiteID->id;
        $viewport->isActive = 1;
        $viewport->position = 'bottom';
        $viewport->save();
        
        // Import bugtracker table
        // ...
    }
    
    /**
     * UnInstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function uninstall() {
        // Destroy staticsite
        $staticSite = ORM::factory('staticsite')->where('name', '=', 'bugtracker')->find();
        $staticSite->delete();
        
        // Destroy viewport
        $viewport = ORM::factory('viewport')->where('name', '=', 'bugtracker')->find();
        $viewport->delete();
        
        // Drop table
        // ...
    }
}
