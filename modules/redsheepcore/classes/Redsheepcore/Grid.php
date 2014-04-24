<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepgridsystem
 * Handles gridsystems
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/04/15
 */
class Redsheepcore_Grid {

    /**
     * Generate a grid system
     * @param type $subscribe
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    public static function generate($height = null, $width = null) {
        
    }

    /**
     * Handles grid functions
     * @param type $handle
     * @param type $param
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    public static function handle($handle = null, $param = null) {
        // Switch case on handle
        switch ($handle) {
            // Save handle
            case 'save':
                // Params must not be empty
                if (!empty($param)) {
                    $return = self::saveGrid($param);
                }
                break;
            case 'load':
                // Load grid
                if (!empty($param)) {
                    $return = self::loadGrid($param);
                } else {
                    $return = self::loadGrid();
                }
                break;
            // Whatever handle
            default:
                break;
        }

        // If return is given, return..
        if (!empty($return) && is_array($return)) {
            return $return;
        }

        // Hmm.. should never be called
        return array('status' => 'pending', 'message' => 'No return message');
    }

    /**
     * Save grid by serialized object
     * @param type $grid
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    private static function saveGrid($grid = null) {
        // Grid must not be empty and must be an array
        if (empty($grid) || !is_array($grid)) {
            return array('status' => 'failure', 'message' => 'Error saving Grid. No grid given');
        }
        
        // Get last grid ID 
        $lastGrid = self::getLatestGridID();
        $nextGridID = (int) ($lastGrid + 1);

        // Iterate all grid elements
        foreach ($grid as $key => $gridElement) {
            // Declare grid element
            $newGRIDElement = ORM::factory('grid');
            
            // Set vars
            $newGRIDElement->gridID = $nextGridID;
            $newGRIDElement->positionX = (int) (empty($gridElement['col']) ? 1 : $gridElement['col']);
            $newGRIDElement->positionY = (int) (empty($gridElement['row']) ? 1 : $gridElement['row']);
            $newGRIDElement->width = (int) (empty($gridElement['size_x']) ? 1 : $gridElement['size_x']);
            $newGRIDElement->height = (int) (empty($gridElement['size_y']) ? 1 : $gridElement['size_y']);
            
            // Save grid element
            $newGRIDElement->save();
        }

        return array('status' => 'success', 'message' => 'Successfully saved');
    }
    
    /**
     * Load grid by id if given. Else load ids
     * @param type $id
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    private static function loadGrid($id = null) {
        // Container return
        $returnContainer = array();
        
        // Select grid by id
        if(!empty($id)) {
            $gridLoad = ORM::factory('grid')->where('gridID', '=', (int)$id)->find_all()->as_array();
            
            // Iterate these elements 
            foreach($gridLoad as $key => $gridElement) {
                $returnContainer[$key]['gridID'] = $id;
                $returnContainer[$key]['col'] = $gridElement->positionX;
                $returnContainer[$key]['row'] = $gridElement->positionY;
                $returnContainer[$key]['size_x'] = $gridElement->width;
                $returnContainer[$key]['size_y'] = $gridElement->height;
            }
        } else {
            // Select all available gridIDs
            $gridLoad = ORM::factory('grid')->group_by('gridID')->find_all();
            
            // Iterate all given grids
            foreach($gridLoad as $gridKey => $grid) {
                $returnContainer[] = isset($grid->gridID) ? $grid->gridID : 0;
            }            
        }    
        
        return array('status' => 'success', 'message' => json_encode($returnContainer));
    }

    /**
     * Returns latest grid ID
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    private static function getLatestGridID() {
        // Get by grid orm
        $lastGRID = ORM::factory('grid')->order_by('gridID', 'DESC')->find();

        // Return the id if given
        return (int) (empty($lastGRID->gridID) ? 1 : $lastGRID->gridID);
    }

}

?>
