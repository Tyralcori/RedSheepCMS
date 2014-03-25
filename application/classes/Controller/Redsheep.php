<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheep MÄH
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/03/11
 */
class Controller_Redsheep extends Controller {

    /**
     * Index action
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/03/11
     */
    public function action_index() {
        
        // Redsheepcore INIT - Param: ENV LEVEL
        Redsheepcore::init('developement');
        
        // Get the session instance
        $session = Redsheepcore::getSession();
        
        // Set current Session as Array into template
        $sessionData = $session->as_array();
        Redsheepcore::setTemplate('session', $sessionData);

        // Load plugins
        Redsheepcore::setTemplate('plugins', Pluginmanager::load());
        
        // Set template vars
        $this->response->body(Redsheepcore::callTemplate('Twig'));
    }
}
?>