<?php

/**
 * Plugin Interface
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/20
 */
interface Plugins_Interface {
    public static function index();
    
    public static function view();
    
    public static function style();
    
    public static function script();
    
    public static function getMeta();
    
    public static function getConfig();
    
    public static function install();
    
    public static function uninstall();
}
?>
