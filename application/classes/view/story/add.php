<?php defined('SYSPATH') or die('No direct script access.');

class View_Story_Add extends View_Page {

	public function action()
	{
		// Form should submit to its own url
		return $this->request->url();
	}

	public function types_options()
	{
		return array(
			array(
				'value'    => 'Story',
				'text'     => 'Story',
				'selected' => Arr::get($this->values, 'type') === 'Story',
			),
			array(
				'value' => 'Chore',
				'text'  => 'Chore',
				'selected' => Arr::get($this->values, 'type') === 'Chore',
			),
		);
	}

	public function points_options()
	{
		$points = array('0', '1', '2', '3', '5', '8', '13', '20', '40', '100');
		$values = array();

		foreach ($points as $value)
		{
			$values[] = array(
				'value'    => $value,
				'text'     => $value,
				'selected' => Arr::get($this->values, 'points') === $value,
			);
		}

		return $values;
	}
}
