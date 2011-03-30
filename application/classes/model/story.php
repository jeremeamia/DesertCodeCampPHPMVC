<?php defined('SYSPATH') or die('No direct script access.');

class Model_Story extends ORM {

	public function filters()
	{
		return array(
			TRUE => array(
				array('trim'),
			),
		);
	}

	public function rules()
	{
		return array(
			'type' => array(
				array('not_empty'),
				// Can only be one of two at the moment
				array('in_array', array(':value', array('Chore', 'Story'))),
			),
			'description' => array(
				array('not_empty'),
				array('max_length', array(':value', 2000)),
			),
			'points' => array(
				array('not_empty'),
				array('digit'),
			),
			'theme' => array(
				array('not_empty'),
				array('max_length', array(':value', 15)),
			),
			'notes' => array(
				array('max_length', array(':value', 2000)),
			),
		);
	}

}
