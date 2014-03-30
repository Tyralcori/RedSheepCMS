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
<<<<<<< HEAD
        $_uri = Request::detect_uri();
=======
        $_uri = str_replace('//', '/', '/'.Request::detect_uri());
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4

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
<<<<<<< HEAD
        #var_dump($action);die();
=======

>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
        $elements = array('version', 'template', 'baseHost', 'title');
=======
        $elements = array('version', 'template', 'baseHost', 'title', 'staticBaseHost');
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4

        // Iterate all elements 
        foreach ($elements as $key => $element) {
            // Config element. Declare it every iteration
            $config = ORM::factory('config');

            // Look for available entrys
            $config->where('name', '=', $element)->find();

            // Create entry if not given
            if (empty($config->name) && empty($config->value)) {
                $config->name = $element;
                $config->value = 'default';
                $config->save();
            }

            // Set config
            self::setConfig($element, ($config->value ? $config->value : 'default'));
        }
        
        // Set space in template
        self::setTemplate('area', $space);
<<<<<<< HEAD

        // Space first letter uppercase - Controller
        $space[0] = strtoupper($space[0]);
=======
        
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
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4

        // Set request / response factorys
        $request = Request::factory();
        $response = Response::factory();
<<<<<<< HEAD

=======
        
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
        
        // Check if executeable
        if(method_exists($spaceCalled, $newAction)) {
            $spaceCalled->$newAction();
        } else {
            $spaceCalled->action_index();
=======
                
        // Check if executeable
        if(method_exists($spaceCalled, $newAction)) {
            // Set action response
            self::setTemplate('actionResponse', $spaceCalled->$newAction());
        } else {
            // Set action response
            self::setTemplate('actionResponse', $spaceCalled->action_index());
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
=======
     * @param type $key
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setConfig($key = null, $value = null) {
<<<<<<< HEAD
        if (!empty($value)) {
=======
        if (!empty($value) && !empty($key)) {
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
            return self::$_template[$key];
        }
        return self::$_template;
    }

    /**
     * Template setter
<<<<<<< HEAD
=======
     * @param type $key
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setTemplate($key = null, $value = null) {
<<<<<<< HEAD
        if (!empty($value)) {
=======
        if (!empty($value) && !empty($key)) {
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
            return self::$_session[$key];
=======
            return self::$_session->get($key);
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
        }
        return self::$_session;
    }

    /**
     * Session setter
<<<<<<< HEAD
=======
     * @param type $key
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setSession($key = null, $value = null) {
        // Check, if session given
        if (!isset($_SESSION)) {
            self::$_session = Session::instance();
        }

<<<<<<< HEAD
        if (!empty($value)) {
            self::$_session[$key] = $value;
=======
        if (!empty($value) && !empty($key)) {
            self::$_session->set($key, $value);
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
=======
     * @param type $key
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setErrorMessages($key = null, $value = null) {
<<<<<<< HEAD
        if (!empty($value)) {
=======
        if (!empty($value) && !empty($key)) {
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
            self::$_errorMessages[$key] = $value;
        }
    }

    /**
     * Call template
     * @param type $engine
<<<<<<< HEAD
=======
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
=======
    
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
            }
        }
    }
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4

}

// End Redsheepcore
