<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * User model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/23
 */
class Model_User extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/23
     */
    protected $_rules = array(
        	'ID' => array(
		'max_length' => 0,
	),
	'username' => array(
		'max_length' => 45,
	),
	'firstname' => array(
		'max_length' => 100,
	),
	'lastname' => array(
		'max_length' => 100,
	),
	'email' => array(
		'max_length' => 255,
	),
	'password' => array(
		'max_length' => 100,
	),
	'isActive' => array(
		'max_length' => 0,
	),
	'roleID' => array(
		'max_length' => 0,
	),

    );
    
    /**
      * This function hashes the password by input
      * @param type $input
      * @return boolean
      * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
      * @since 2014/03/24
      */
     public function hashPasword($input = null) {
         // If empty there is nothing to hash
         if (empty($input)) {
             return false;
         }
         // Salt. Psst!!!
         $salt = "NMæſđss3amtł3qkfáw";
         // Hash it
         $pass = hash('sha256', $salt . $input);
         // Return hashed password
         return $pass;
     }
}