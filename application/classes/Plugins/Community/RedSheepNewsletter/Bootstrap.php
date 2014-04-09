<?php

/**
 * Description of RedSheepBugNewsletter
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/08
 */
class Plugins_Community_RedSheepNewsletter_Bootstrap extends Controller implements Plugins_Interface {

    /**
     * Index function
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function index() {
        return array(
            'status' => 'success',
            'message' => array(
                'view' => self::view(),
                'style' => self::style(),
                'script' => self::script(),
                'indexFunction' => self::generate(),
            )
        );
    }

    /**
     * View function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function view() {
        $template = file_get_contents(__DIR__ . '/view/frontend/index.html');

        return $template;
    }

    /**
     * CSS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function style() {
        $cssPath = file_get_contents(__DIR__ . '/view/assets/css/newsletter.css');

        return $cssPath;
    }

    /**
     * JS Return function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function script() {
        $jsPath = file_get_contents(__DIR__ . '/view/assets/js/newsletter.js');

        return $jsPath;
    }

    /**
     * Return all the meta infos
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function getMeta() {
        return array(
            'name' => 'RedSheepNewsletter',
            'description' => 'Simple RedSheepNewsletter',
            'version' => '0.9.0',
            'publisher' => 'RedSheep Studios',
            'publisherHomepage' => 'http://redsheepstudios.com/',
        );
    }

    /**
     * Return config elements
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function getConfig() {
        return array(
        );
    }

    /**
     * Install function
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function install() {
        // Staticsite create        
        $staticSite = ORM::factory('staticsite');
        $staticSite->name = 'newsletter';
        $staticSite->text = file_get_contents(__DIR__ . '/install/overview.html');
        $staticSite->save();

        // StaticSite Id
        $getLastStaticSiteID = ORM::factory('staticsite')->where('name', '=', 'newsletter')->find();

        // Viewport create
        $viewport = ORM::factory('viewport');
        $viewport->name = 'newsletter';
        $viewport->link = '/newsletter';
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
     * @since 2014/04/08
     */
    public static function uninstall() {
        // Destroy staticsite
        $staticSite = ORM::factory('staticsite')->where('name', '=', 'newsletter')->find();
        $staticSite->delete();

        // Destroy viewport
        $viewport = ORM::factory('viewport')->where('name', '=', 'newsletter')->find();
        $viewport->delete();

        // Unlink model
        // ...
        // Drop table
        // ...
    }

    /**
     * Bla bla
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/08
     */
    public static function generate() {
        // Get current overview
        $request = Redsheepcore::getRequestObject();
        $_uri = str_replace('/', '', $request::detect_uri());

        // Get postData
        $postData = Redsheepcore_Data::run($request->post());

        // Check, if unsubscribe called
        if ($_uri == 'newsletterunsubscribe') {
            // Mark flag
            Redsheepcore::setTemplate('newsletterUnsubscribe', true);

            // If post data given, may someone unsubscribe
            if (!empty($postData)) {
                // Get model
                $subscribe = ORM::factory('subscribe')->where('email', '=', $postData['email'])->find();

                // If id is empty, someone new subscribe
                if (empty($subscribe->id)) {
                    // Message, that email is given
                    Redsheepcore::setTemplate('newsletterMessage', 'This eMail adress is not given. May you misstyped?');
                } else {
                    // Else, email is given, delete..
                    $subscribe->delete();

                    // Message, that email is given
                    Redsheepcore::setTemplate('newsletterMessage', 'Successfuly unsubscribed.');
                }
            }
        } else {
            // Subscribe?
            if (!empty($postData)) {
                // Get model
                $subscribe = ORM::factory('subscribe')->where('email', '=', $postData['email'])->find();

                if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
                    // Message, that email is given
                    Redsheepcore::setTemplate('newsletterMessage', 'This eMail is not valid.');
                } else {
                    // If id is empty, someone new subscribe
                    if (empty($subscribe->id)) {
                        // Set email
                        $subscribe->email = $postData['email'];

                        // Set firstname if given
                        if (!empty($postData['firstname'])) {
                            $subscribe->firstname = $postData['firstname'];
                        }

                        // Set lastname if given
                        if (!empty($postData['lastname'])) {
                            $subscribe->lastname = $postData['lastname'];
                        }

                        // Save subscriber
                        $subscribe->save();

                        // Message, that email is given
                        Redsheepcore::setTemplate('newsletterMessage', 'Successfully subscribed, welcome!');
                        
                        // Unset post element (spam prev)
                        unset($_POST);
                    } else {
                        // Message, that email is given
                        Redsheepcore::setTemplate('newsletterMessage', 'This eMail adress allready exists, thanks.');
                    }
                }
            }
        }
    }

}
