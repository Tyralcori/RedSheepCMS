<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Backend
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Controller_Backend extends Controller_Redsheep {

    /**
     * Construct function - prevention for direct site call
     * @param Request $request
     * @param Response $response
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/25
     */
    public function __construct(Request $request, Response $response) {
        // Prevention
        parent::__construct($request, $response);

        // Get session
        $sessionCheck = Redsheepcore::getSession();
        $sessionData = $sessionCheck->as_array();

        // Load plugins
        Redsheepcore::setTemplate('plugins', Pluginmanager::load('backend'));

        // Check, if session is okay
        if (empty($sessionData['username']) && str_replace('/', '', Request::detect_uri()) !== 'backendlogin') {
            header('Location: ' . URL::base() . 'backend/login');
            die();
        } elseif (!empty($sessionData['username'])) {
            Redsheepcore::setTemplate('backendSession', $sessionData);
        }
    }

    /**
     * Backend Index
     * @param type $config
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public function action_index() {
        // Get version
        $version = Redsheepcore::getConfig('version') ? Redsheepcore::getConfig('version') : 'default';

        // Check if update / installation
        Updater::checkVersion($version);

        // Register all plugins
        Pluginmanager::register();

        // Get backend session
        $sessionBackend = Session::instance();

        // Session set as array
        $dataSession = $sessionBackend->as_array();

        // Check, if login is required
        if (empty($dataSession) || !is_array($dataSession) || empty($dataSession['username'])) {
            // Login required
            return array('status' => 'warning', 'message' => 'Login required', 'backendSession' => false);
        }

        // Everything fine
        return array('status' => 'success', 'message' => 'Logged in', 'backendSession' => $dataSession);
    }

    /**
     * Plugin Loader
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/26
     */
    public function action_plugins() {
        // Get whole uri
        $_uri = str_replace('//', '/', '/' . Request::detect_uri());

        // Create special viewport param
        $specialViewport = str_replace('/', '', str_replace('/backend/plugins', '', Redsheepcore_Data::run($_uri)));

        // If not empty pluginID
        if (!empty($specialViewport)) {
            // Edit config plugin!
            $explodeNeedle = explode('edit', $specialViewport);

            // Check, if save needle is given
            $saveNeedle = explode('save', $specialViewport);

            if (!empty($saveNeedle) && is_array($saveNeedle) && isset($saveNeedle[1])) {
                // Save button pressed, param: pluginID, Request Object (includes post params)
                Redsheepcore::setTemplate('pluginConfigResponse', Pluginmanager::saveedit((int) $explodeNeedle[1], Redsheepcore::getRequestObject()));
            }

            if (!empty($explodeNeedle) && is_array($explodeNeedle) && !empty($explodeNeedle[1])) {
                // Plugin EDIT - getConfigurationElements get pluginID
                $pluginConfig = Pluginmanager::getConfigurationElements((int) $explodeNeedle[1]);

                // Set config in template, if config is given
                if (!empty($pluginConfig) && is_array($pluginConfig)) {
                    // Get all infos about the plugin
                    $selectedPlugin = ORM::factory('plugin')->where('id', '=', (int) $explodeNeedle[1])->find();

                    // Get current config
                    $config = ORM::factory('config')->where('name', '=', 'Plugin_' . $selectedPlugin->name)->find();
                    $configContainerTemp = explode(',', str_replace(array('{', '}'), '', $config->value));
                    
                    // Empty config container
                    $configContainer = array();
                    
                    // Iterate Database output
                    foreach($configContainerTemp as $key => $value) {
                        // Explode on :
                        $currTemp = explode(':', $value);

                        // Set default values by iterating all given config values
                        foreach($pluginConfig as $key => $currentValue) {
                            if($currentValue['name'] == $currTemp[0]) {
                                $pluginConfig[$key]['default'] = $currTemp[1] ? $currTemp[1] : $currentValue['default'];
                            }
                        }
                    }
                    
                    // Set template vars
                    Redsheepcore::setTemplate('pluginConfig', $pluginConfig);
                    Redsheepcore::setTemplate('pluginID', (int) $explodeNeedle[1]);
                }
            }

            // Set plugin ID int cast
            $pluginID = (int) $specialViewport;

            // Just need this
            $invert = false;

            // Install or uninstall plugin
            if (!empty($pluginID)) {
                $invert = Pluginmanager::invert($pluginID);
            }

            // If $invert, reload site
            if ($invert) {
                // Log
                Redsheepcore_Watchdog::setLog('info', 'plugins', 'Inverted plugin ' . $pluginID);

                header('Location: ' . URL::base() . 'backend/plugins');
                die();
            }
        }

        // Get all plugins
        $allPlugins = ORM::factory('plugin')->find_all()->as_array();

        // Plugin container
        $containerPlugins = array();

        // Iterate all given plugins
        foreach ($allPlugins as $key => $currentPlugin) {
            // Add some infos into container
            $requiredInfos = array('id', 'name', 'description', 'active', 'added', 'installedOn', 'version', 'publisher', 'publisherHomepage', 'section', 'space');

            // Add every given element into the container
            foreach ($requiredInfos as $reqKey => $reqValue) {
                if ($reqValue == 'active') {
                    $containerPlugins[$key][$reqValue] = $currentPlugin->$reqValue;
                } else {
                    $containerPlugins[$key][$reqValue] = $currentPlugin->$reqValue ? $currentPlugin->$reqValue : '';
                }
            }
        }

        // Check if empty. If not, send it to the view
        if (!empty($containerPlugins) && is_array($containerPlugins) && !empty($containerPlugins[0])) {
            Redsheepcore::setTemplate('pluginsOverview', $containerPlugins);
        }
    }

    /**
     * Account Overview
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/26
     */
    public function action_accounts() {
        
    }

    /**
     * Navigation Overview
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/26
     */
    public function action_navigation() {
        // Get all navigation elements - saved in "viewports"
        $navigationElements = ORM::factory('viewport')->find_all()->as_array();

        // New container Element
        $containerElement = array();

        // Get all names for the static site
        foreach ($navigationElements as $key => $navigationElement) {
            // Add some infos into container
            $requiredInfos = array('id', 'name', 'link', 'typeID', 'isActive', 'position');

            // Add every given element into the container
            foreach ($requiredInfos as $reqKey => $reqValue) {
                if ($reqValue == 'isActive') {
                    $containerElement[$key][$reqValue] = $navigationElement->$reqValue;
                } else {
                    $containerElement[$key][$reqValue] = $navigationElement->$reqValue ? $navigationElement->$reqValue : '';
                }
            }

            // If static site, get name
            if ($navigationElement->type == 'staticsite') {
                $staticSiteElement = ORM::factory('staticsite')->where('id', '=', $navigationElement->typeID)->find()->as_array();
                $containerElement[$key]['type'] = 'staticsite';
                $containerElement[$key]['typeName'] = $staticSiteElement['name'] ? $staticSiteElement['name'] : 'Empty name';
            }
        }

        // Get whole uri
        $_uri = str_replace('//', '/', '/' . Request::detect_uri());

        // Create special viewport param
        $specialViewport = str_replace('/', '', str_replace('/backend/navigation', '', Redsheepcore_Data::run($_uri)));

        // Make it safer than before..
        $viewportID = (int) $specialViewport;

        // Set own get parameters
        $getParamsInOwn = htmlentities($_SERVER['REQUEST_URI']);

        // Substr on ? in QUERY
        $currentNeedleGetPara = explode('?', $getParamsInOwn);

        if (!empty($currentNeedleGetPara[1])) {

            // Split on & - GET PARAMS Delimiter
            $splittedNeedle = explode('&', $currentNeedleGetPara[1]);
            $newGet = array();

            // Set new get params
            foreach ($splittedNeedle as $key => $value) {
                $tempVar = explode('=', $value);
                $newGet[$tempVar[0]] = $tempVar[1];
            }
        }

        // Create a new site, if $_GET['new'] not empty
        if (!empty($newGet)) {
            if (!empty($newGet['new'])) {
                // Create new site
                Redsheepcore::setTemplate('createNewSite', true);

                // Placeholder
                $viewportSpecial = array();

                // Get all available sites
                $viewportSpecial['availableSites'] = ORM::factory('staticsite')->find_all()->as_array();

                // Return all given viewport elements
                Redsheepcore::setTemplate('oneViewport', $viewportSpecial);
                return true;
            }

            if (!empty($newGet['newSite'])) {
                $newSiteToSave = true;
            }
        }


        // If empty, return all elements
        if (!empty($viewportID) || !empty($newSiteToSave)) {
            // Check, if $_POST is given
            if (!empty($_POST)) {
                // Get post
                $postData = $_POST;

                // Spam prev.
                unset($_POST);

                // Get current element, set new darta
                $currentViewportElement = ORM::factory('viewport')->where('id', '=', $viewportID)->find();
                $currentViewportElement->id = $viewportID;
                $currentViewportElement->name = $postData['headline'] ? htmlentities($postData['headline']) : 'default';
                $currentViewportElement->link = $postData['link'] ? htmlentities($postData['link']) : '/' . htmlentities($postData['headline']);
                $currentViewportElement->type = $postData['type'] ? htmlentities($postData['type']) : 'staticsite';
                $currentViewportElement->typeID = $postData['elementID'] ? htmlentities($postData['elementID']) : 1;
                $currentViewportElement->isActive = $postData['isActive'];
                $currentViewportElement->position = $postData['position'] ? htmlentities($postData['position']) : 'top';

                // Save all the changes
                $currentViewportElement->save();

                // Log
                Redsheepcore_Watchdog::setLog('info', 'navigation', 'Created / updated element ' . $postData['headline']);

                // Just a safe flag
                Redsheepcore::setTemplate('siteIsSaved', 'Successfully saved!');
            }
            // Edit a special site by viewport ID
            $viewportSpecial = ORM::factory('viewport')->where('id', '=', $viewportID)->find()->as_array();
            if (!empty($viewportSpecial['name'])) {
                // Get name from static site by id
                $viewportStaticTemp = ORM::factory('staticsite')->where('id', '=', $viewportSpecial['typeID'])->find()->as_array();
                $viewportSpecial['typeName'] = $viewportStaticTemp['name'] ? $viewportStaticTemp['name'] : 'Empty name';

                // Get all available sites
                $viewportSpecial['availableSites'] = ORM::factory('staticsite')->find_all()->as_array();

                // Return all given viewport elements
                Redsheepcore::setTemplate('oneViewport', $viewportSpecial);
                return true;
            }
        }

        // Return all given viewport elements
        Redsheepcore::setTemplate('viewports', $containerElement);
        return true;
    }

    /**
     * Login backend user
     * @param type $config
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    public function action_login() {
        // Get session
        $sessionCheck = Redsheepcore::getSession();
        $sessionData = $sessionCheck->as_array();

        // Check, if session is okay
        if (!empty($sessionData['username'])) {
            // Everything fine
            return array('status' => 'success', 'message' => 'Logged in', 'backendSession' => $sessionData);
        }

        // Get post data
        if (!empty($_POST)) {
            $postData = $this->request->post() ? $this->request->post() : array();
        }

        // Check, if everything is okay
        if (!empty($postData) && is_array($postData) && (!empty($postData['username']) || !empty($postData['password']))) {
            // Create user model
            $user = ORM::factory('user');

            // Hash the password
            $postData['passwordHashed'] = $user->hashPasword($postData['password']);

            // Make safe input
            $safePost = Redsheepcore_Data::run($postData);

            // If this input is not empty
            if (!empty($safePost['username']) && !empty($safePost['passwordHashed'])) {
                // Get user by email or username
                $userByName = $user->where('username', '=', $safePost['username'])->and_where('password', '=', $safePost['passwordHashed'])->and_where('isActive', '=', 1)->find()->as_array();
                $userByEmail = $user->where('email', '=', $safePost['username'])->and_where('password', '=', $safePost['passwordHashed'])->and_where('isActive', '=', 1)->find()->as_array();

                // Yes, i am lazy
                $userNeedle = is_array($userByName) ? $userByName : (is_array($userByEmail) ? $userByEmail : array());

                // Check 
                if (!empty($userNeedle) && is_array($userNeedle) && !empty($userNeedle['username'])) {
                    // Set session for each given key
                    foreach ($userNeedle as $key => $value) {
                        Redsheepcore::setSession($key, $value);
                    }

                    // Get session
                    $sessionCheck = Redsheepcore::getSession();
                    $sessionData = $sessionCheck->as_array();

                    // Check, if session is okay
                    if (!empty($sessionData['username'])) {
                        // Watchdog login
                        Redsheepcore_Watchdog::setLog('info', 'login', $sessionData['username'] . ' logged in');

                        // Everything fine
                        header('Location: ' . URL::base() . 'backend');
                        die();
                    }
                }
            }
        }

        // Something wrong
        return array('status' => 'failure', 'message' => 'Wrong username / email and password.', 'backendSession' => false);
    }

    /**
     * Backend Cron
     * @param type $config
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/20
     */
    public function action_cron() {
        // Execute crons
        $executedCrons = Redsheepcore_Cron::execute();

        // Executed string
        $executed = 'Following crons executed: ';

        // If executedcrons
        if (!empty($executedCrons) && is_array($executedCrons) && count($executedCrons) > 0) {
            // Prepare string 
            foreach ($executedCrons as $key => $cron) {
                // Log cron
                Redsheepcore_Watchdog::setLog('info', 'cron', 'Executing cron ' . $cron);
                $executed .= $cron . ' ';
            }
            // Show executed crons
            Redsheepcore::setTemplate('executedCrons', $executed);
        }

        // OK
        return true;
    }

    /**
     * Site management
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/25
     */
    public function action_sites() {
        // Get whole uri
        $_uri = str_replace('//', '/', '/' . Request::detect_uri());

        // Create special site param
        $specialSite = str_replace('/', '', str_replace('/backend/sites', '', Redsheepcore_Data::run($_uri)));

        // Set own get parameters
        $getParamsInOwn = htmlentities($_SERVER['REQUEST_URI']);

        // Substr on ? in QUERY
        $currentNeedleGetPara = explode('?', $getParamsInOwn);

        if (!empty($currentNeedleGetPara[1])) {

            // Split on & - GET PARAMS Delimiter
            $splittedNeedle = explode('&', $currentNeedleGetPara[1]);
            $newGet = array();

            // Set new get params
            foreach ($splittedNeedle as $key => $value) {
                $tempVar = explode('=', $value);
                $newGet[$tempVar[0]] = $tempVar[1];
            }
        }

        // Create a new site, if $_GET['new'] not empty
        if (!empty($newGet)) {
            if (!empty($newGet['new'])) {
                Redsheepcore::setTemplate('createNewSite', "Create new site");
                Redsheepcore::setTemplate('siteCalled', array('status' => 'success'));
            }

            if (!empty($newGet['newSite'])) {
                $newSiteToSave = true;
            }
        }
        // If special site given, load this, else all
        if (empty($specialSite) && empty($newSiteToSave)) {
            // Load all
            $staticSitesGiven = ORM::factory('staticsite')->find_all()->as_array();
            Redsheepcore::setTemplate('siteCalled', array('status' => 'success', 'message' => $staticSitesGiven));
        } else {
            // Load by specialsite
            $staticSitesGiven = ORM::factory('staticsite')->where('name', '=', strtolower($specialSite))->find()->as_array();

            if (empty($staticSitesGiven['id'])) {
                Redsheepcore::setTemplate('siteCalled', array('status' => 'failure', 'message' => "Site $specialSite not found!"));
            } else {
                // If empty text, fill it. No empty text possible..
                if (empty($staticSitesGiven['text'])) {
                    $staticSitesGiven['text'] = '&nbsp;';
                }
                // Special site to template / editor
                Redsheepcore::setTemplate('siteCalled', array('status' => 'success', 'message' => $staticSitesGiven));
            }

            // Set post Data
            if (!empty($_POST)) {
                $postData = $this->request->post() ? $this->request->post() : array();
            }

            // If not empty, user want to save data
            if (!empty($postData)) {
                // Get current site by headname
                $currentSite = ORM::factory('staticsite')->where('name', '=', strtolower($specialSite))->find();
                $currentSite->id = $currentSite->id;
                $currentSite->name = $postData['headline'] ? $postData['headline'] : $specialSite;
                $currentSite->text = $postData['text'];
                $currentSite->save();

                // Log
                Redsheepcore_Watchdog::setLog('info', 'site', 'Created / updated site ' . $postData['headline']);

                Redsheepcore::setTemplate('siteSaved', array('status' => 'success', 'message' => 'Successfully changed. New site available: <a href="/backend/sites/' . $currentSite->name . '">' . $currentSite->name . '</a>', 'saved' => TRUE));
            }
        }
    }

    /**
     * Session destroy
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    public function action_logout() {
        // Get backend session
        $sessionBackend = Session::instance();

        // Session temp
        $sessionTemp = $sessionBackend->as_array();

        // Watchdog logout
        Redsheepcore_Watchdog::setLog('info', 'login', $sessionTemp['username'] . ' logged out');

        // Destroy session
        $sessionDestroy = $sessionBackend->destroy();

        // Unsets
        unset($sessionBackend);
        unset($sessionTemp);

        // Redirect
        header('Location: ' . URL::base() . 'backend');
        die();
    }

}

?>
