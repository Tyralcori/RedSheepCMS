<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepcore CORE. 
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/03/11
 */
class Kohana_Redsheepcore extends View {

    /**
     * Constructor
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public function __construct() {
        
    }

    /**
     * RUN FUNCTION
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function run() {
        // GET URI
        $_uri = str_replace('//', '/', '/'.Request::detect_uri());
        
        // Execute before events by URI
        self::setTemplate('beforeEvents', Redsheepcore_Event::execute(htmlentities($_uri), 'before'));

        // Explode on / (first element should be empty)
        $uriParts = explode('/', htmlentities($_uri));

        // Space
        $space = 'frontend';
        
        // Executer
        if (isset($uriParts[1]) && !empty($uriParts[1])) {
            $executer = $uriParts[1];
        } else {
            $executer = 'frontend';
        }

        // Action
        if (isset($uriParts[2]) && !empty($uriParts[2])) {
            $action = $uriParts[2];
        } else {
            $action = 'index';
        }
        
        // Overwrite space | BACKEND ONLY
        if ($uriParts[1] == 'backend') {
            // Space
            $space = 'backend';

            // Executer
            if (isset($uriParts[2]) && !empty($uriParts[2])) {
                $executer = $uriParts[2];
            } else {
                $executer = 'backend';
            }

            // Action
            if (isset($uriParts[3]) && !empty($uriParts[3])) {
                $action = $uriParts[3];
            } else {
                $action = 'index';
            }
        }
        
        // First letter in uppercase. Kohana needs this.
        $executer[0] = strtoupper($executer[0]);

        // If executer exits
        if (file_exists(APPPATH . 'classes/' . $executer . '.php') && is_readable(APPPATH . 'classes/' . $executer . '.php')) {
            // Declare
            $finalExecuter = new $executer;

            // Check, if method given in executer
            if (method_exists($finalExecuter, $action)) {
                // Execute, if given
                self::setTemplate($finalExecuter . '_' . $action, $finalExecuter->$action());
            }
        }

        // Config elements
        $elements = array('version', 'template', 'baseHost', 'title', 'staticBaseHost', 'bannerLink');

        // Iterate all elements 
        foreach ($elements as $key => $element) {
            // Config element. Declare it every iteration
            $config = ORM::factory('config');

            // Look for available entrys
            $config->where('name', '=', $element)->find();

            // Create entry if not given
            if (empty($config->name) && empty($config->value)) {
                $config->name = $element;
                $config->value = '';
                $config->save();
            }

            // Set config
            self::setConfig($element, ($config->value));
        }
        
        // Set space in template
        self::setTemplate('area', $space);
        
        // Load action
        $siteActionToLoad = strtolower($executer);
        if(strtolower($executer) == 'frontend' || strtolower($executer) == 'backend') {
            $siteActionToLoad = 'index';
        }
        
        // Get navigationpoints
        $viewports = ORM::factory('viewport')->where('isActive', '=', 1)->find_all()->as_array();
        
        // Navi container
        $naviContainer = array();
        
        // Found elements array
        $foundViewports = array();
        $foundViewportsLinks = array();
        
        // Index at first
        $foundViewports[] = 'index';
        
        // Iterate navigation
        foreach($viewports as $key => $viewport) {
            // Found viewport into navicontainer
            $naviContainer[$viewport->position][] = array(
                'name' => $viewport->name,
                'link' => $viewport->link ? $viewport->link : '/' . $viewport->name,
                'type' => $viewport->type,
                'typeID' => $viewport->typeID,
            );      
            
            // Found following element, add into found viewports
            $foundViewports[] = $viewport->name;
            $foundViewportsLinks[] = str_replace('/', '', $viewport->link) ? str_replace('/', '', $viewport->link) : $viewport->name;
        }
        
        // Space first letter uppercase - Controller
        $space[0] = strtoupper($space[0]);
        
        // If current action not in viewport
        if(!in_array($siteActionToLoad, $foundViewports) && !in_array($siteActionToLoad, $foundViewportsLinks)) {            
            // And if not exists
            if(!method_exists('Controller_' . $space, 'action_' . $siteActionToLoad)) {    
                // Log this 
                Redsheepcore_Watchdog::setLog('error', 'failureCall', 'Fail to call: Controller_' . $space . '::' .  'action_' . $siteActionToLoad);
                
                // 404 error not found
                $siteActionToLoad = 'error';
            }
        }        
        
        // Get the template name
        if(in_array($siteActionToLoad, $foundViewportsLinks)) {
            $createRoute = ORM::factory('viewport')->where('link', '=', '/' . $siteActionToLoad)->find()->as_array();
            if(!empty($createRoute) && is_array($createRoute) && !empty($createRoute['name'])) {
                $siteActionToLoad = $createRoute['name'];
            }
        }
        
        // Navi container to the template
        self::setTemplate('navigation', $naviContainer);
        
        // Set action to load
        self::setTemplate('siteOutput', self::getSiteOutput($siteActionToLoad));

        // Set action in template
        self::setTemplate('action', $siteActionToLoad);

        // Set request / response factorys
        $request = Request::factory();
        $response = Response::factory();

        // Internal setting
        self::setRequestObject($request);
        self::setResponseObject($response);
        
        // Declare space
        $controllerSpace = 'Controller_' . $space;
        $spaceCalled = new $controllerSpace($request, $response);
        
        // Given
        $newAction = 'action_index';
        
        // If uriparts 2 not empty, new action :)
        if(!empty($uriParts[2])) {
            // New action
            $newAction = 'action_' . htmlentities($uriParts[2]);
        }
                
        // Check if executeable
        if(method_exists($spaceCalled, $newAction)) {
            // Set action response
            self::setTemplate('actionResponse', $spaceCalled->$newAction());
        } else {
            // Set action response
            self::setTemplate('actionResponse', $spaceCalled->action_index());
        }
        
        
        // Replace placeholders by language (frontend only)
        if(strtolower($space) == 'frontend') {
            Redsheepcore_Lang::generate(self::getSession('language'));
        }
        // Execute after events by URI
        self::setTemplate('afterEvents', Redsheepcore_Event::execute(htmlentities($_uri), 'after'));        
    }

    /**
     * Redsheepcore environment
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    protected static $_environment = NULL;

    /**
     * Initialize the Redsheepmodule module
     * @param type $env
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function init($env = null) {
        // Set env if not given
        if (empty($env)) {
            $env = 'production';
        }

        // Set env var
        self::$_environment = $env;
        
        // Make it run
        self::run();
    }

    /**
     * Create Redsheepcore
     * @return  Redsheepcore
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function factory($file = NULL, array $data = NULL) {
        return new Redsheepcore($file, $data);
    }

    /**
     * Private config element
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_config = array();

    /**
     * Config getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function getConfig($key = null) {
        if (!empty($key)) {
            return self::$_config[$key];
        }
        return self::$_config;
    }

    /**
     * Config setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setConfig($key = null, $value = null) {
        if (!empty($value) && !empty($key)) {
            self::$_config[$key] = $value;
        }
    }

    /**
     * Private template element
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_template = array();

    /**
     * Template getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function getTemplate($key = null) {
        if (!empty($key)) {
            if(isset(self::$_template[$key])) {
                return self::$_template[$key];
            }
            return false;
        }
        return self::$_template;
    }

    /**
     * Template setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setTemplate($key = null, $value = null) {
        if (!empty($value) && !empty($key)) {
            self::$_template[$key] = $value;
        }
    }

    /**
     * Private Session element
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_session = array();

    /**
     * Session getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function getSession($key = null) {
        // Check, if session given
        if (!isset($_SESSION)) {
            self::$_session = Session::instance();
        }

        if (!empty($key)) {
            return self::$_session->get($key);
        }
        return self::$_session;
    }

    /**
     * Session setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setSession($key = null, $value = null) {
        // Check, if session given
        if (!isset($_SESSION)) {
            self::$_session = Session::instance();
        }

        if (!empty($value) && !empty($key)) {
            self::$_session->set($key, $value);
        }
    }

    /**
     * Private Session element
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_errorMessages = array();

    /**
     * Session getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function getErrorMessages($key = null) {
        if (!empty($key)) {
            return self::$_errorMessages[$key];
        }
        return self::$_errorMessages;
    }

    /**
     * Session setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setErrorMessages($key = null, $value = null) {
        if (!empty($value) && !empty($key)) {
            self::$_errorMessages[$key] = $value;
        }
    }
    
    /**
     * Private Request element
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_request = array();

    /**
     * Request getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function getRequestObject() {
        return self::$_request;
    }

    /**
     * Request setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function setRequestObject($requestObject = null) {
        if (!empty($requestObject)) {
            self::$_request = $requestObject;
        }
    }
    
    /**
     * Private Response element
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    private static $_response = array();

    /**
     * Response getter
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function getResponseObject() {
        return self::$_response;
    }

    /**
     * Response setter
     * @param type $key
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function setResponseObject($requestObject = null) {
        if (!empty($requestObject)) {
            self::$_response = $requestObject;
        }
    }

    /**
     * Call template
     * @param type $engine
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function callTemplate($engine = null) {
        // Template Engine default
        $createdEngine = array();
        
        // Recive engine
        if (!empty($engine)) {
            $createdEngine = $engine::factory(self::getConfig('template') . '/' . self::getTemplate('area') . '/index');
        }

        // Register vars for the template
        $templateVars = self::getTemplate();
        $configVars = self::getConfig();
        $errorVars = self::getErrorMessages();

        // Set template vars 
        foreach ($templateVars as $key => $value) {
            $createdEngine->$key = $value;
        }

        // Set config vars
        foreach ($configVars as $key => $value) {
            $createdEngine->$key = $value;
        }

        // Set error vars
        foreach ($errorVars as $key => $value) {
            $createdEngine->$key = $value;
        }

        // Return created vars
        return $createdEngine;
    }
    
    /**
     * Get static site template
     * @param type $siteName
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    protected static function getSiteOutput($siteName = null) {
        // Empty? Return
        if(empty($siteName)) {
            return false;
        }
        
        // Get siteType
        $siteType = ORM::factory('viewport')->where('name', '=', $siteName)->find()->as_array();
        
        if(!empty($siteType['type'])) {
            switch($siteType['type'])
            {
                default:
                case 'staticsite':
                    // Get staticsite content
                    $getStaticSite = ORM::factory('staticsite')->where('id', '=', $siteType['typeID'])->find()->as_array();
                    
                    // Return static site content
                    return $getStaticSite['text'];
                    break;
                case 'grid':
                    // Get grid content
                    $getGrid = ORM::factory('grid')->where('gridID', '=', $siteType['typeID'])->find()->as_array();
                    // Return grid content
                    return $getGrid;
                    break;
            }
        }
    }

}

// End Redsheepcore
