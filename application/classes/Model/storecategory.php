<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Storecategory model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/10
 */
class Model_Storecategory extends ORM {
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
	'active' => array(
		'max_length' => 0,
	),
	'parent' => array(
		'max_length' => 0,
	),

    );
}