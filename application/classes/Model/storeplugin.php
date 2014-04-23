<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Storeplugin model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/10
 */
class Model_Storeplugin extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/10
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'name' => array(
		'max_length' => 100,
	),
	'description' => array(
		'max_length' => 200,
	),
	'version' => array(
		'max_length' => 45,
	),
	'publisher' => array(
		'max_length' => 100,
	),
	'section' => array(
		'max_length' => 45,
	),
	'publisherHomepage' => array(
		'max_length' => 255,
	),
	'space' => array(
		'max_length' => 45,
	),
	'downloads' => array(
		'max_length' => 0,
	),
	'rating' => array(
		'max_length' => 0,
	),
	'active' => array(
		'max_length' => 0,
	),

    );
}