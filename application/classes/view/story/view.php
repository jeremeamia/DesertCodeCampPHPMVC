<?php defined('SYSPATH') or die('No direct script access.');

class View_Story_View extends View_Page {

	public function title()
	{
		return __(Kohana::message('titles', 'story.view'), array(':id' => $this->story->id));
	}

	public function story()
	{
		$story = $this->story->as_array();
		$story['notes'] = nl2br(HTML::chars($this->story->notes));

		return $story;
	}

}
