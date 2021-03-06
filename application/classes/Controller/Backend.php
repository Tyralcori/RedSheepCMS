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
<<<<<<< HEAD
=======
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

        // Check, if session is okay
        if (empty($sessionData['username']) && Request::detect_uri() !== '/backend/login') {
            header('Location: ' . URL::base() . 'backend/login');
            die();
        } elseif (!empty($sessionData['username'])) {
            Redsheepcore::setTemplate('backendSession', $sessionData);
        }
    }

    /**
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
<<<<<<< HEAD
=======

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
                $containerElement[$key][$reqValue] = $navigationElement->$reqValue ? $navigationElement->$reqValue : '';
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

        // Create a new site, if $_GET['new'] not empty
        if (!empty($_GET)) {
            if (!empty($_GET['new'])) {
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
            
            if (!empty($_GET['newSite'])) {
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
                $currentViewportElement->isActive = htmlentities($postData['isActive']);
                $currentViewportElement->position = $postData['position'] ? htmlentities($postData['position']) : 'top';

                // Save all the changes
                $currentViewportElement->save();

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
                        // Everything fine
                        header('Location: ' . URL::base() . 'backend');
                        die();
                    }
                }
            }
        }

        // Something wrong
        return array('status' => 'failure', 'message' => 'Wrong username / email and password.', 'backendSession' => false);
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
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
                $executed .= $cron . ' ';
            }
            // Show executed crons
<<<<<<< HEAD
            echo $executed;
        }      
        
=======
            Redsheepcore::setTemplate('executedCrons', $executed);
        }

>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
        // OK
        return true;
    }

<<<<<<< HEAD
=======
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

        // Create a new site, if $_GET['new'] not empty
        if (!empty($_GET)) {
            if (!empty($_GET['new'])) {
                Redsheepcore::setTemplate('createNewSite', "Create new site");
                Redsheepcore::setTemplate('siteCalled', array('status' => 'success'));
            }

            if (!empty($_GET['newSite'])) {
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

        // Destroy session
        $sessionDestroy = $sessionBackend->destroy();

        // Redirect
        header('Location: ' . URL::base() . 'backend');
        die();
    }

>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
}

?>
