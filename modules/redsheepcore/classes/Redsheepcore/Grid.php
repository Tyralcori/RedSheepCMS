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
        // Set elements / config        
        Redsheepcore::setTemplate('rsGridConfigElements', array('height' => (int) $height, 'width' => (int) $width));

        // Set widgets
        Redsheepcore::setTemplate('rsGridWidgetElements', self::getWidgets());
    }

    /**
     * Handles grid functions
     * @param type $handle
     * @param type $param
     * @param type $gridContainer
     * @param type $gridContainerID
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    public static function handle($handle = null, $param = null, $gridContainer = null, $gridContainerID = null, $gridID = null) {
        // Switch case on handle
        switch ($handle) {
            // Save handle
            case 'save':
                // Params must not be empty
                if (!empty($param)) {
                    // gridContainers could be empty.
                    $return = self::saveGrid($param, $gridContainer, $gridContainerID, $gridID);
                }
                break;
            // Load a grid
            case 'load':
                // Load grid
                if (!empty($param)) {
                    $return = self::loadGrid($param);
                } else {
                    $return = self::loadGrid();
                }
                break;
            // Edit a element
            case 'edit':
                if (!empty($param)) {
                    $return = self::editElement($param);
                } else {
                    $return = self::editElement();
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
     * @param type $gridContainer
     * @param type $gridContainerID
     * @param type $gridID
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    private static function saveGrid($grid = null, $gridContainer = null, $gridContainerID = null, $gridID = null) {
        // Grid must not be empty and must be an array
        if (empty($grid) || !is_array($grid) || empty($gridContainer) || !is_array($gridContainer)) {
            return array('status' => 'failure', 'message' => 'Error saving Grid. No grid given');
        }

        // Get last grid ID 
        $lastGrid = self::getLatestGridID();
        $nextGridID = (int) ($lastGrid + 1);

        // Set current gridID
        $gridID = (int) $gridID;
        
        // Attention, im too lazy to "update"
        if (isset($gridID) && !empty($gridID)) {
            // DB Module instead ORM delete iterating records
            DB::delete('grids')->where('gridID', '=', $gridID)->execute();
        }
        
        // Delete empty layer, if containers are given
        if(!empty($gridContainer) && is_array($gridContainer)) {
            // Delete more empty layer
            if(!empty($gridContainerID) && is_array($gridContainerID)) {
                $gridContainerID = self::remodelGrid($gridContainerID);
            }
            $gridContainer = self::remodelGrid($gridContainer);
        }

        // Iterate all grid elements
        foreach ($grid as $key => $gridElement) {
            // Declare grid element
            $newGRIDElement = ORM::factory('grid');

            // Set vars
            $newGRIDElement->gridID = (isset($gridID) && !empty($gridID))? $gridID : $nextGridID;
            $newGRIDElement->positionX = (int) (empty($gridElement['col']) ? 1 : $gridElement['col']);
            $newGRIDElement->positionY = (int) (empty($gridElement['row']) ? 1 : $gridElement['row']);
            $newGRIDElement->width = (int) (empty($gridElement['size_x']) ? 1 : $gridElement['size_x']);
            $newGRIDElement->height = (int) (empty($gridElement['size_y']) ? 1 : $gridElement['size_y']);

            // Set widgetID if given
            if (isset($gridContainer[$key])) {
                $needle = self::getWidgets($gridContainer[$key]);
                $newGRIDElement->widgetID = empty($needle) ? $gridContainer[$key] : $needle;

                // Set widgetContentID if given
                if (isset($gridContainerID[$key])) {
                    // Set content ID
                    $newGRIDElement->widgetContentID = $gridContainerID[$key];
                }
            }

            // Save grid element
            $newGRIDElement->save();
        }

        // Return 
        return array('status' => 'success', 'message' => 'Successfully saved', 'returnedGridID' => self::getLatestGridID());
    }
    
    /**
     * Delete all not given values in array
     * @param type $toRemodel
     * @param type $dependency
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/28
     */
    private static function remodelGrid($toRemodel = null, $dependency = null) {
        // toRemodel must not be empty
         if(empty($toRemodel)) {
             return false;
         }
         
         // Holds remodeld values
         $remodeldContainer = array();
         
         // If dependency is given, iterate by this
         if(!empty($dependency) && is_array($dependency)) {
             // Iterate the dependency
             foreach ($dependency as $key => $value) {
                 // Continue if no value is given
                 if(!isset($value)) {
                     continue;
                 }
                 
                 // Add toRemodel into remodeldContainer
                 $remodeldContainer[$key] = $toRemodel[$key];
             }
         } else {
             // Iterate normal toRemodelContainer
             foreach ($toRemodel as $key => $value) {
                 // Continue if no value is given
                 if(!isset($value) || strlen($value) < 1) {
                     continue;
                 }

                 // Add toRemodel into remodeldContainer
                 $remodeldContainer[$key] = $toRemodel[$key];
             }
         }
         
         // Return the result
         return $remodeldContainer;
   }

    /**
     * Return all widgets from the table "widgets"
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/25
     */
    private static function getWidgets($type = null) {
        // Return the type id by type, if given
        if (isset($type)) {
            $widget = ORM::factory('widget')->where('type', '=', $type)->find();
            return $widget->id;
        }

        // If not, return everything
        return ORM::factory('widget')->find_all()->as_array();
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
        if (!empty($id)) {
            $gridLoad = ORM::factory('grid')->where('gridID', '=', (int) $id)->find_all()->as_array();

            // Iterate these elements 
            foreach ($gridLoad as $key => $gridElement) {
                $returnContainer[$key]['gridID'] = $id;
                $returnContainer[$key]['col'] = $gridElement->positionX;
                $returnContainer[$key]['row'] = $gridElement->positionY;
                $returnContainer[$key]['size_x'] = $gridElement->width;
                $returnContainer[$key]['size_y'] = $gridElement->height;
                $returnContainer[$key]['widgetID'] = $gridElement->widgetID;
                $returnContainer[$key]['widgetIDName'] = self::selectNameByID($gridElement->widgetID);
                $returnContainer[$key]['widgetContentID'] = $gridElement->widgetContentID;
            }
        } else {
            // Select all available gridIDs
            $gridLoad = ORM::factory('grid')->group_by('gridID')->find_all();

            // Iterate all given grids
            foreach ($gridLoad as $gridKey => $grid) {
                $returnContainer[] = isset($grid->gridID) ? $grid->gridID : 0;
            }
        }

        return array('status' => 'success', 'message' => json_encode($returnContainer));
    }

    /**
     * Returns widget type by id
     * @param type $id
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/28
     */
    private static function selectNameByID($id = null) {
        // ID must not be null
        if(empty($id)) {
            return false;
        }
        
        // Get element
        $element = ORM::factory('widget')->where('id', '=', $id)->find();
        
        // Return element type
        return $element->type ? $element->type : 'empty';
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

    /**
     * Return possible responses for the edit elements
     * @param string $type
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/28
     */
    private static function editElement($params = null) {
        // Check type
        if (empty($params) || empty($params['type'])) {
            // Default type - may its dirty, yes..
            $type = 'text';
        } else {
            // Set type if given
            $type = $params['type'];
        }

        // Craft function name
        $fuctionName = 'editElement_' . $type;
        $className = get_class();
        
        // Check, if method exists or not
        if (method_exists($className, $fuctionName)) {
            if(isset($params['id'])) {
                // Call function with param
                $typeResponse = $className::$fuctionName($params['id']);
            } else {
                // Call function
                $typeResponse = $className::$fuctionName();
            }
            
            // Return the typeResponse to the template
            return array('status' => 'success', 'message' => json_encode($typeResponse));
        }

        // Method not exists, watchlog log
        Redsheepcore_Watchdog::setLog('warning', 'Gridhandle', 'Failure to call ' . $className . '::' . $fuctionName);

        // Return failure
        return array('status' => 'failure', 'message' => json_encode("Wow, something went wrong."));
    }

    /**
     * Return all given text sites
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/28
     */
    private static function editElement_text($id = null) {
        // Text container
        $textContainer = array();
        
        if(!isset($id)) {
            // Get all textes
            $text = ORM::factory('staticsite')->find_all()->as_array();
        } else {
            // Get text by id
            $text = ORM::factory('staticsite')->where('id', '=', $id)->find_all()->as_array();
        }
        
        // Iterate all staticsites that returns
        foreach($text as $key => $site) {
            if(isset($id)) {
                $textContainer['id'] = $site->id;
                $textContainer['name'] = $site->name;
                $textContainer['text'] = $site->text;
            } else {
                $textContainer[$key]['id'] = $site->id;
                $textContainer[$key]['name'] = $site->name;
                $textContainer[$key]['text'] = $site->text;
            }
        }
        
        // Return this
        return $textContainer;
    }

    /**
     * Return embed code youtubevideos
     * @param type $id
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    private static function editElement_youtubevideo($id = null) {
        // Check if id is given
        if(isset($id)) {
            // Youtube Pattern:
            $pattern = '<iframe width="%WIDTH%" height="%HEIGHT%" src="//www.youtube.com/embed/%ID%" frameborder="0" allowfullscreen></iframe>';
            
            // Return pattern with replaced ID
            return array('id' => str_replace('%ID%', $id, $pattern), 'text' => str_replace('%ID%', $id, $pattern));
        }   
        
        // Nothing to do
        return false;
    }
    
    /**
     * Return embed code images
     * @param type $id
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    private static function editElement_image($id = null) {
        // Check if id is given
        if(isset($id)) {
            // Youtube Pattern:
            $pattern = '<img width="%WIDTH%" height="%HEIGHT%" src="%ID%"/>';
            
            // Return pattern with replaced ID
            return array('id' => str_replace('%ID%', $id, $pattern), 'text' => str_replace('%ID%', $id, $pattern));
        }   
        
        // Nothing to do
        return false;
    }
}

?>
