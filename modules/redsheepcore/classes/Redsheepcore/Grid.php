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
            // Whatever handle
            default:
                break;
        }

        // If return is given, return..
        if (!empty($return) && is_array($return)) {
            return $return;
        }

        // Hmm.. should never be called
        return array('status' => 'pending', 'message' => 'So return message');
    }

    /**
     * 
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
