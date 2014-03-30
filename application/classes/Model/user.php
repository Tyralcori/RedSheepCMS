<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * User model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/02/28
 */
class Model_User extends ORM {
 
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/02/28
     */
    protected $_rules = array(
        'username' => array(
            'not_empty'  => NULL,
            'min_length' => array(4),
            'max_length' => array(32),
            'regex'      => array('/^[-\pL\pN_.]++$/uD'),
        ),
        'firstname' => array(
            'not_empty'  => NULL,
            'min_length' => array(4),
            'max_length' => array(32),
            'regex'      => array('/^[-\pL\pN_.]++$/uD'),
        ),
        'lastname' => array(
            'not_empty'  => NULL,
            'min_length' => array(4),
            'max_length' => array(32),
            'regex'      => array('/^[-\pL\pN_.]++$/uD'),
        ),
        'email' => array(
            'not_empty'  => NULL,
            'min_length' => array(4),
            'max_length' => array(255),
            'email'      => NULL,
        ),
        'password' => array(
            'not_empty'  => NULL,
            'min_length' => array(8),
            'max_length' => array(255),
            'regex'      => array('/^[-\pL\pN_.]++$/uD'),
        ),
    );
<<<<<<< HEAD
=======
    
        
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
>>>>>>> a1d6ae493c9306a74a2f934405d48575cdd61fc4
}