<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Story extends Controller_Website {

	public function action_index() {}
	public function action_edit() {}
	public function action_delete() {}

	public function action_view()
	{
		$this->view
			->bind('story', $story);

		$story = Model::factory('story')
			->where('id', '=', $this->request->param('id'))
			->find();
		
		if ( ! $story->loaded())
			throw new HTTP_Exception_404;
	}

	public function action_add()
	{
		$this->view
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

} // End Story
