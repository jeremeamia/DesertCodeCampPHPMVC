<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Story extends Controller {

	public function action_index()
	{
		$story = new stdClass;
		$story->id          = 1;
		$story->type        = 'Story';
		$story->description = 'As a User, I can eat lots of pizza, so that I will not be hungry.';
		$story->points      = 5;
		$story->theme       = 'Eating';
		$stories = array($story, $story, $story, $story, $story, $story, $story, $story);

		$this->view = View::factory('story/index')
			->set('title', 'User Stories')
			->set('request', $this->request)
			->set('stories', $stories); // ORM::factory('story')->find_all()

		$this->response->body($this->view);
	}

	public function action_view()
	{
		$this->response->body('hello, world!');
	}

	public function action_add()
	{
		$this->response->body('hello, world!');
	}

	public function action_edit()
	{
		$this->response->body('hello, world!');
	}

	public function action_delete()
	{
		$this->response->body('hello, world!');
	}

} // End Story
