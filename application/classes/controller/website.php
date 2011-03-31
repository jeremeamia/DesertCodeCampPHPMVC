<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller {

	/**
	 * @var  boolean  Whether or not to auto-render the view
	 **/
	public $auto_render = TRUE;

	/**
	 * @var  object  The content view object
	 */
	public $view;

	/**
	 * Responsible for determining what view class to instantiate
	 */
	public function before()
	{
		if ($this->auto_render === TRUE)
		{
			$path = array(
				$this->request->directory(),
				$this->request->controller(),
				$this->request->action(),
			);
			$path = trim(implode('/', $path), '/');

			try
			{
				$this->view = Kostache::factory($path);
			}
			catch (Kohana_View_Exception $x)
			{
				/*
				 * The View class could not be found, so the controller action
				 * is repsonsible for making sure this is resolved.
				 */
				$this->view = NULL;
			}
		}
	}

	/**
	 * Responsible for setting the response after the controller action has executed
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			if ($this->view === NULL)
				throw new Kohana_View_Exception('There was no View created for this request.');

			$this->response->body($this->view);
		}
	}

}