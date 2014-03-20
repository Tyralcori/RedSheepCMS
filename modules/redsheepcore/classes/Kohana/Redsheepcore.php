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
        $_uri = Request::detect_uri();

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

        // First letter in uppercase. Kohana need this.
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
        $elements = array('version', 'template', 'baseHost', 'title');

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

        // Space first letter uppercase - Controller
        $space[0] = strtoupper($space[0]);

        // Set request / response factorys
        $request = Request::factory();
        $response = Response::factory();

        // Declare space
        $controllerSpace = 'Controller_' . $space;
        $spaceCalled = new $controllerSpace($request, $response);
        $spaceCalled->action_index();
        
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
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setConfig($key = null, $value = null) {
        if (!empty($value)) {
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
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setTemplate($key = null, $value = null) {
        if (!empty($value)) {
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
            return self::$_session[$key];
        }
        return self::$_session;
    }

    /**
     * Session setter
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setSession($key = null, $value = null) {
        // Check, if session given
        if (!isset($_SESSION)) {
            self::$_session = Session::instance();
        }

        if (!empty($value)) {
            self::$_session[$key] = $value;
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
     * @param type $value
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public static function setErrorMessages($key = null, $value = null) {
        if (!empty($value)) {
            self::$_errorMessages[$key] = $value;
        }
    }

    /**
     * Call template
     * @param type $engine
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

}

// End Redsheepcore
