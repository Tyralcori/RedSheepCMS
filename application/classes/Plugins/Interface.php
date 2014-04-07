<?php

/**
 * Plugin Interface
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/20
 */
interface Plugins_Interface {
    // This function get called as "init"
    public static function index();
    
    // Return the HTML View
    public static function view();
    
    // Return Style
    public static function style();
    
    // Return Script
    public static function script();
    
    // Return Meta Data like Name, version, publisher, etc.
    public static function getMeta();
    
    // Return config settings
    public static function getConfig();
    
    // Executed on install
    public static function install();
    
    // Executed on uninstall
    public static function uninstall();
}
?>
