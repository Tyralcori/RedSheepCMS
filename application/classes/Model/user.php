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
}