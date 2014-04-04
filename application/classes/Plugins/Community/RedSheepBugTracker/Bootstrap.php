<?php

/**
 * Description of RedSheepBugTracker
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/04
 */
class Plugins_Community_RedSheepBugTracker_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function index() {
        return array(
            'status' => 'success',
            'message' => array(
                'view' => self::view(),
                'style' => self::style(),
                'script' => self::script(),
                'tickets' => self::getOverview(),
            )
        );
    }

    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }

    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/bugTracker.css');

        return $cssPath;
    }

    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/bugTracker.js');

        return $jsPath;
    }

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepBugTracker',
            'description' => 'Simple BugTracker',
            'version' => '1.0.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }

    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function install() {
        // Staticsite create        
        $staticSite = ORM::factory('staticsite');
        $staticSite->name = 'bugtracker';
        $staticSite->text = file_get_contents(__DIR__ . '/install/overview.html');
        $staticSite->save();

        // StaticSite Id
        $getLastStaticSiteID = ORM::factory('staticsite')->where('name', '=', 'bugtracker')->find();

        // Viewport create
        $viewport = ORM::factory('viewport');
        $viewport->name = 'bugtracker';
        $viewport->link = '/bugtracker';
        $viewport->type = 'staticsite';
        $viewport->typeID = $getLastStaticSiteID->id;
        $viewport->isActive = 1;
        $viewport->position = 'bottom';
        $viewport->save();

        // Generate model
        // ...
        // Import bugtracker table
        // ...
    }

    /**
     * UnInstall function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function uninstall() {
        // Destroy staticsite
        $staticSite = ORM::factory('staticsite')->where('name', '=', 'bugtracker')->find();
        $staticSite->delete();

        // Destroy viewport
        $viewport = ORM::factory('viewport')->where('name', '=', 'bugtracker')->find();
        $viewport->delete();

        // Unlink model
        // ...
        // Drop table
        // ...
    }

    /**
     * Return overview from all/special ticket(s)
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/04
     */
    public static function getOverview() {
        // Get current overview
        $request = Redsheepcore::getRequestObject();
        $_uri = str_replace('/', '', $request::detect_uri());

        // Get postData
        $postData = Redsheepcore_Data::run($request->post());

        // If all postData given, check
        if (!empty($postData) && is_array($postData) && !empty($postData['email']) && !empty($postData['bug'])) {
            // Check email
            if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
                Redsheepcore::setTemplate('bugTrackerReturnMessage', 'Invalid Email!');
            } else {
                // Session set
                $session = Session::instance();

                // Get all of the session data as an array
                $data = $session->as_array();

                // Not allowed to report
                $allowedReport = false;
                
                if (!empty($data['bugTrackerLastSent'])) {
                    $now = time();
                    if(($now - $data['bugTrackerLastSent']) > 600) {
                        $allowedReport = true;
                    } else {
                        Redsheepcore::setTemplate('bugTrackerReturnMessage', 'Spamprotection. You are allowed to report a Bug every 10 Minutes!');
                    }
                } else {
                    $allowedReport = true;
                }
                
                if ($allowedReport) {
                    // Set ticket datas
                    $ticket = ORM::factory('bugtracker');
                    $ticket->email = $postData['email'];
                    $ticket->bugDescribe = $postData['bug'];
                    $ticket->sentOn = date('Y-n-d H:i:s');
                    $ticket->prio = 'normal';
                    $ticket->assignedTo = '-';
                    $ticket->status = 'unseen';
                    $ticket->comment = '-';
                    $ticket->save();
                    unset($_POST);
                    
                    // Set timestamp
                    $session->set('bugTrackerLastSent', time());
                    
                    // Thank you.
                    Redsheepcore::setTemplate('bugTrackerReturnMessage', 'Your bug was reported. Thank you to improve RedSheep CMS!');
                }
            }
        } else {
            // All fields required
            // Redsheepcore::setTemplate('bugTrackerReturnMessage', 'Please fill all fields!');
        }

        // Set ticketID
        $ticketID = (int) str_replace('bugtracker', '', $_uri);

        // Check, if uri is bugtracker
        if ($_uri != 'bugtracker' && empty($ticketID)) {
            return false;
        }

        // Declare Container
        $ticketContainer = array();

        // If no id, load all, else load one by id
        if (empty($ticketID)) {
            // Load all tickets
            $ticketContainer = ORM::factory('bugtracker')->order_by('sentOn', 'DESC')->find_all()->as_array();
        } else {
            // Load ticket by id
            $ticketContainer = ORM::factory('bugtracker')->order_by('sentOn', 'DESC')->where('id', '=', $ticketID)->find()->as_array();
        }

        // Return tickets
        Redsheepcore::setTemplate('bugTrackerReturn', array(
            'ticketCount' => count($ticketContainer),
            'tickets' => is_array($ticketContainer) ? $ticketContainer : array($ticketContainer),
        ));

        // Template
        return true;
    }

}
