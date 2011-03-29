<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Story extends Controller {

	public function action_index()
	{
		$this->view = View::factory('story/index')
			->set('title', 'User Stories')
			->set('request', $this->request)
			->set('stories', Model::factory('story')->find_all());

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
