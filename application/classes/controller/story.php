<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Story extends Controller_Website {

	public function action_index()
	{
		$stories = Model::factory('story')->find_all();
		$view = View::factory('story/index')
			->set('title',   'User Stories')
			->set('request', $this->request)
			->set('stories', $stories);

		$this->response->body($view);
	}

	public function action_view()
	{
		$story = Model::factory('story')
			->where('id', '=', $this->request->param('id'))
			->find();
		
		if ( ! $story->loaded())
			throw new HTTP_Exception_404;

		$view = View::factory('story/view')
			->set('title',   'Story #'.$story->id)
			->set('request', $this->request)
			->set('story',   $story);

		$this->response->body($view);
	}

	public function action_add()
	{
		$this->view
			->set('title',   'Add User Story')
			->set('request', $this->request)
			->bind('values', $values)
			->bind('errors', $errors);

		if ($values = $this->request->post())
		{
			try
			{
				$story = Model::factory('story')
					->values($values, array('type', 'description', 'points', 'theme', 'notes'))
					->save();
				
				$this->request->redirect(Route::url('story'));
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('validation');
			}
		}
	}

	public function action_edit()
	{
		// Note: This page is not implemented
		$view = View::factory('story/incomplete');
		$this->response->body($view);
	}

	public function action_delete()
	{
		// Note: This page is not implemented
		$view = View::factory('story/incomplete');
		$this->response->body($view);
	}

} // End Story
