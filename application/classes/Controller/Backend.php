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
        $postData = $this->request->post();

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
                        return array('status' => 'success', 'message' => 'Logged in', 'backendSession' => $sessionData);
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
                $executed .= $cron . ' ';
            }
            // Show executed crons
            echo $executed;
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

        // If special site given, load this, else all
        if (empty($specialSite)) {
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
                if(empty($staticSitesGiven['text'])) {
                    $staticSitesGiven['text'] = '&nbsp;';
                }
                // Special site to template / editor
                Redsheepcore::setTemplate('siteCalled', array('status' => 'success', 'message' => $staticSitesGiven));
            }

            // Set post Data
            $postData = $this->request->post() ? $this->request->post() : array();
            
            // If not empty, user want to save data
            if (!empty($postData)) {                
                // Get current site by headname
                $currentSite = ORM::factory('staticsite')->where('name', '=', strtolower($specialSite))->find();
                $currentSite->id = $currentSite->id;
                $currentSite->name = $postData['headline'] ? $postData['headline'] : $specialSite;
                $currentSite->text = $postData['text'];
                $currentSite->save();
                Redsheepcore::setTemplate('siteSaved', array('status' => 'success', 'message' => 'Successfully changed. New site available: <a href="/backend/sites/'.$currentSite->name.'">' . $currentSite->name . '</a>', 'saved' => TRUE));
            }
        }
    }

    /**
     * Session destroy
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/24
     */
    public function action_logout() {
        // Get backend session
        $sessionBackend = Session::instance();

        // Destroy session
        $sessionDestroy = $sessionBackend->destroy();

        // Return bool
        return $sessionDestroy;
    }

}

?>
