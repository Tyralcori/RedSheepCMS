<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Mailpattern model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/14
 */
class Model_Mailpattern extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/14
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'name' => array(
		'max_length' => 45,
	),
	'from' => array(
		'max_length' => 255,
	),
	'subject' => array(
		'max_length' => 255,
	),
	'text' => array(
		'max_length' => 65535,
	),
	'html' => array(
		'max_length' => 65535,
	),
	'sendHTML' => array(
		'max_length' => 0,
	),
	'header' => array(
		'max_length' => 255,
	),

    );
}