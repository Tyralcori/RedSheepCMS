<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Subscribe model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/09
 */
class Model_Subscribe extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/09
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'email' => array(
		'max_length' => 255,
	),
	'firstname' => array(
		'max_length' => 100,
	),
	'lastname' => array(
		'max_length' => 100,
	),

    );
}