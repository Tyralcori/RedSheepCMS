<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Widget model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/25
 */
class Model_Widget extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/25
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'name' => array(
		'max_length' => 75,
	),
	'type' => array(
		'max_length' => 75,
	),
	'configElements' => array(
		'max_length' => 250,
	),

    );
}