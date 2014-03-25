<?php

/**
 * Description of Install
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Updates_Installer extends Controller implements Updates_Interface {
    
    /**
     * Start Installation
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function startUpdate() {
        echo("START INSTALLATION");
        
        self::createTables();
        self::alterTables();
        $updated = self::updateVersion();
        
        // Updated?
        if(!$updated) {
            return array('status' => 'failure');
        }
        
        // True
        return array('status' => 'success', 'version' => $updated);
    }
    
    /**
     * Set version
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function updateVersion() {
        // Config element
        $config = ORM::factory('config')->where('name', '=', 'version')->find();
        $config->value = '0.4.0';
        $config->save();
        
        // Success
        return $config->value;
    }
    
    /**
     * Create Tables
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static function createTables() {
        return true;
    }
    
    /**
     * Alter Tables
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static function alterTables() {
        return true;
    }
}

?>
