<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepmodel
 * I am so lazy. That's why this class generates models by existing tables
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/04/07
 */
class Redsheepcore_Model {

    /**
     * Generate function
     * @param type $tablename
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    public static function generate($tableName = null) {
        // Must not be empty
        if (empty($tableName)) {
            return false;
        }

        // Maybe just an temp name
        $modelName = $tableName;

        // If last character "s", remove - now it is your modelName
        if (strtolower($tableName[strlen($tableName) - 1]) == 's') {
            // Modelname = tablename without s as last character
            $modelName = substr_replace($tableName, "", -1);
        }

        // Create the model path
        $modelPath = APPPATH . 'classes/Model/' . $modelName . '.php';

        // Create model
        $generated = self::writeModelPattern($modelPath);
    }

    private static function writeModelPattern($modelPath = null) {
        // Must not be empty
        if (empty($modelPath)) {
            return false;
        }

        if (!is_readable(APPPATH . 'classes/Model/')) {
            // Log
            Redsheepcore_Watchdog::setLog('error', 'modelgenerator', 'Modelpath is not readable');
        } elseif (!is_writable(APPPATH . 'classes/Model/')) {
            // Log
            Redsheepcore_Watchdog::setLog('error', 'modelgenerator', 'Modelpath is not writeable');
        } else {
            // Read the default content
            $content = file_get_contents(APPPATH . 'classes/Model/DEFAULTPATTERN.php');
            
            // Generate replace DATE
            $date = date('Y/m/d');
            
            // Generate replace NAME
            $name = str_replace('.php', '', str_replace(APPPATH . 'classes/Model/', '', $modelPath));
            
            // First letter in uppercase
            $name[0] = strtoupper($name[0]);
            
            // Replace date var
            $content = str_replace('%DATE%', $date, $content);
            
            // Replace name var
            $content = str_replace('%NAME%', $name, $content);
            
            // Open model
            $handle = fopen($modelPath, "w+");
            
            // Write the replaced content
            fwrite($handle, $content);
            
            // Close the model
            fclose($handle);
            
            // Now, after creation, declare model
            $currentModelGenerator = ORM::factory(strtolower($name));
            
            // String placeholder
            $stringRules = '';
            
            // Generate columns
            foreach($currentModelGenerator->list_columns() as $key => $column) {
                $stringRules .= (($key!='id') ? "\t" : '' ) . "'" . $key . "' => array(" . 
                        "\r\n\t\t'max_length' => " . (isset($column['character_maximum_length']) ? $column['character_maximum_length'] : 0) . ","
                        . "\r\n\t),\r\n";
            }
            
            // Read the current content
            $content = file_get_contents($modelPath);
            
            // Replace rules var
            $content = str_replace('/*%RULES%*/', $stringRules, $content);
            
            // Open model
            $handle = fopen($modelPath, "w+");
            
            // Write the replaced content
            fwrite($handle, $content);
            
            // Close the model
            fclose($handle);
        }
        
        // Everything is fine
        return true;
    }

}

?>
