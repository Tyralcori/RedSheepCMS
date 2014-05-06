<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Gallery model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/05/06
 */
class Model_Gallery extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/06
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'name' => array(
		'max_length' => 500,
	),
	'uploadAt' => array(
		'max_length' => 0,
	),
	'author' => array(
		'max_length' => 0,
	),
	'headline' => array(
		'max_length' => 500,
	),

    );
}