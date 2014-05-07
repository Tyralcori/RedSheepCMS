<?php

/**
 * Description of RedSheepGallery
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/05/05
 */
class Plugins_Community_RedSheepGallery_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function index() {
        self::initGallery();
        return array(
            'status' => 'success',
            'message' => array(
                'view' => self::view(),
                'isOnly' => true,
                'style' => self::style(),
                'script' => self::script(),
            )
        );
    }

    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }

    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/gallery.css');

        return $cssPath;
    }

    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/gallery.js');

        return $jsPath;
    }

    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function install() {
        return true;
    }

    /**
     * Uninstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function uninstall() {
        return true;
    }

    /**
     * Returns config
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function getConfig() {
        return array();
    }

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepGallery',
            'description' => 'RedSheep Gallery Plugin',
            'version' => '0.0.1',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }

    /**
     * INIT the gallery
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/05
     */
    public static function initGallery() {
        // Get current overview
        $request = Redsheepcore::getRequestObject();
        $_uri = str_replace('/', '', $request::detect_uri());

        // Set image
        $isImageCalled = strpos($_uri, 'image');
        $imageCalled = str_replace('image', '', $_uri);

        // Check, if user want the latest
        $isLatestCalled = strpos($_uri, 'latest');
        
        // Check, if upvote is called
        $isUpvoteCalled = strpos($_uri, 'upvote');
        
        // Check, if downvote is called
        $isDownvoteCalled = strpos($_uri, 'downvote');
        
        // Ajax votes only
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && ($isDownvoteCalled === 0 || $isUpvoteCalled === 0)) {
            // Developement var
            $userID = 1;
            
            // Get called image
            $imageCalled = isset($_POST) ? Redsheepcore_Data::run($_POST['pictureID']) : false;
            
            // Must not be empty
            if(empty($imageCalled)) {
                return false;
            }
            
            // Set vote into table
            $setVote = ORM::factory('galleriesvote');
            $setVote->pictureKey = $imageCalled;
            $setVote->userID = $userID;
            $setVote->direction = ($isUpvoteCalled === 0) ? 'up' : 'down';
            $setVote->votedOn = 'NOW()';
            $setVote->save();
            
            // Get picture vote sum
            $getVoteSumPic = ORM::factory('gallery')->where('smallLink', '=', $imageCalled)->find();
            
            // Calculate new sum
            $sum = ($isUpvoteCalled === 0) ? ((empty($getVoteSumPic->voteSum) ? 0 : $getVoteSumPic->voteSum) + 1) : ((empty($getVoteSumPic->voteSum) ? 0 : $getVoteSumPic->voteSum) - 1);

            // Set new vote sum
            DB::update('galleries')->set(array('voteSum' => (int) $sum))->where('smallLink', '=', $imageCalled)->execute();
            
            // Return new sum
            echo json_encode(array('voteSum' => (int) $sum));
            die();
        }
        
        // Check if image is called
        if ($isImageCalled === 0 && $imageCalled) {
            // Return special image - no ajax
            Redsheepcore::setTemplate('specialImage', self::getImage($imageCalled));
        } else {
            // Check, if post is given or not
            if (!empty($_POST) && isset($_POST['offset'])) {
                // int cast
                self::$_counter = (int) $_POST['offset'];
            }

            // If latest images, no filter
            if ($isLatestCalled === 0) {
                // Get next images
                $response = self::getLatestImages();
                Redsheepcore::setTemplate('activeNavPoint', 'latest');
            } else {
                // Get next images (hot)
                $response = self::getLatestImages(50);
                Redsheepcore::setTemplate('activeNavPoint', 'hot');
            }

            // If is ajax request, return json response 
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                echo json_encode(array('images' => $response));
                die();
            } else {
                // Else, set template
                Redsheepcore::setTemplate('imageList', $response);
            }
        }

        // Safe..
        return true;
    }

    /**
     * Counter Element
     * @var type 
     */
    private static $_counter = 0;

    /**
     * Return Limit latest images
     * @param type $limit
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/06
     */
    private static function getLatestImages($filter = null, $limit = 3) {
        if (!empty($filter)) {
            // Set filter
            $filterd = (int) $filter;

            // Get first 3 images in desc direction by uploadAt (latest at first) | FILTER BY Impressions
            $response = ORM::factory('gallery')->where('impressions', '>=', $filterd)->order_by('uploadAt', 'DESC')->limit($limit)->offset(self::$_counter)->find_all()->as_array();
        } else {
            // Get first 3 images in desc direction by uploadAt (latest at first)
            $response = ORM::factory('gallery')->order_by('uploadAt', 'DESC')->limit($limit)->offset(self::$_counter)->find_all()->as_array();
        }

        // Count all elements
        $countElements = ORM::factory('gallery')->count_all();

        // Check if images to load
        if ($countElements < (self::$_counter )) {
            return array();
        }

        // Return response
        return self::makePrettyResponse($response);
    }

    /**
     * Returns special image
     * @param type $imageTitle
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/06
     */
    private static function getImage($imageTitle = null) {
        // Must not be empty
        if (empty($imageTitle)) {
            return false;
        }

        // Make safe data
        $headline = Redsheepcore_Data::run($imageTitle);

        // Set picture
        $picture = ORM::factory('gallery')->where('smallLink', '=', $headline)->find_all()->as_array();

        // Get the token
        $hasToken = Redsheepcore::getSession($headline);

        // Check, if token is setted
        if (!$hasToken) {
            // At least i only expecting exactly one found image
            foreach ($picture as $key => $singlePicture) {
                // Set impressions
                $currentImpressions = (int) $singlePicture->impressions;

                // If empty impressions, its the first impression
                if (empty($currentImpressions)) {
                    $currentImpressions = 1;
                } else {
                    // Impression + 1
                    $currentImpressions += 1;
                }

                // Update the impressions
                DB::update('galleries')->set(array('impressions' => $currentImpressions))->where('smallLink', '=', $headline)->execute();

                // Set impression deny token
                Redsheepcore::setSession($headline, true);
            }
        }

        // Return image by healdine (title)
        return self::makePrettyResponse($picture);
    }

    /**
     * Make a very pretty response 
     * @param type $images
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/06
     */
    private static function makePrettyResponse($images) {
        // Image must not be empty - must be a array
        if (empty($images) || !is_array($images)) {
            return false;
        }

        // Image container (return this later)
        $imageContainer = array();

        // Some nice properties
        $proertiesRequired = array('headline', 'name', 'uploadAt', 'author', 'smallLink', 'voteSum');

        // Iterate all images
        foreach ($images as $key => $image) {
            // Foreach propertie 
            foreach ($proertiesRequired as $keyPropertie => $value) {
                // Some pretty date
                if ($value == 'uploadAt') {
                    $date = new DateTime(date($images[$key]->$value));
                    $imageContainer[$key]['prettyDate'] = $date->format('d M, Y H:i:s');
                }
                
                // Check voteSum
                if($value == 'voteSum') {                    
                    if(empty($images[$key]->$value)) {
                        $images[$key]->$value = 0;
                    }
                    $imageContainer[$key]['voteSum'] = (int) $images[$key]->$value;
                }
                
                // Add current propertie in image container
                $imageContainer[$key][$value] = $images[$key]->$value;
            }
        }

        // Return filled container
        return $imageContainer;
    }

}
