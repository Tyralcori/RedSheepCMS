<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Plugin model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/02/28
 */
class Model_Plugin extends ORM {

    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/02/28
     */
    protected $_rules = array(
        'name' => array(
            'not_empty' => NULL,
            'min_length' => array(1),
            'max_length' => array(45),
        ),
        'value' => array(
            'not_empty' => NULL,
            'min_length' => array(1),
            'max_length' => array(255),
            'regex' => array('/^[-\pL\pN_.]++$/uD'),
        ),
    );
}