<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * AUTOMATIC GENERATED
 * Galleriesvote model
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @version 
 * @todo 
 * @since 2014/05/07
 */
class Model_Galleriesvote extends ORM {
    /**
     * Rules
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/05/07
     */
    protected $_rules = array(
        'id' => array(
		'max_length' => 0,
	),
	'pictureKey' => array(
		'max_length' => 45,
	),
	'userID' => array(
		'max_length' => 0,
	),
	'direction' => array(
		'max_length' => 5,
	),
	'votedOn' => array(
		'max_length' => 0,
	),

    );
}