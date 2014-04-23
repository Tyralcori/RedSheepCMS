<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Watchdog model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/07
 */
class Model_Watchdog extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/07
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'type' => array(
		'max_length' => 50,
	),
	'key' => array(
		'max_length' => 50,
	),
	'value' => array(
		'max_length' => 500,
	),
	'datetime' => array(
		'max_length' => 0,
	),

    );
}