<?php defined('SYSPATH') or die('No direct script access.');

class Model_Story extends Model {

	public function find_all()
	{
		$types  = array('Story', 'Story', 'Chore', 'Story');
		$lorem  = explode(' ', 'ellentesque pretium nunc et justo ultrices sodales morbi egestas velit in turpis lacinia malesuada aliquam vel tortor quis neque consequat tincidunt integer gravida dui ac augue feugiat id posuere neque aliquet');
		$points = array(1, 2, 3, 5, 8, 13, 20);
		$themes = array('Grape', 'Strawberry', 'Lemon', 'Orange');
		$pick   = function(array $arr, $count = 1) use( & $pick)
		{
			$str = $arr[array_rand($arr)];
			if ($count > 1)
				return $str.' '.$pick($arr, $count - 1);
			else
				return $str;
		};

		$stories = array();
		foreach (range(1, rand(6, 13)) as $index)
		{
			$story = new stdClass;
			$story->id          = $index;
			$story->type        = $pick($types);
			$story->description = 'As a User, I can '.$pick($lorem, rand(3, 5)).', so that '.$pick($lorem, rand(2, 4)).'.';
			$story->points      = $pick($points);
			$story->theme       = $pick($themes);

			$stories[] = $story;
		}
		return $stories;
	}

}