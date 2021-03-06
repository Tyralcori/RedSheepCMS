<?php

/**
 * Description of Install
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Updates_rev60 extends Controller implements Updates_Interface {
    /**
     * Start update
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function startUpdate() {
        echo("Start Update rev60");
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
        $config->value = '0.6.0';
        $config->save();
        
        // Success
        return $config->value;
    }
}
?>
