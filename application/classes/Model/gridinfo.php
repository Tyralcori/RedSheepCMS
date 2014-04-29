<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Gridinfo model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/04/29
 */
class Model_Gridinfo extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/29
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'gridID' => array(
		'max_length' => 0,
	),
	'gridName' => array(
		'max_length' => 75,
	),

    );
}