<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Translation model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/16
 */
class Model_Translation extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/16
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'langshort' => array(
		'max_length' => 45,
	),
	'key' => array(
		'max_length' => 100,
	),
	'value' => array(
		'max_length' => 500,
	),

    );
}