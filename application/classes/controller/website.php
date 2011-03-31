<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller {

	/**
	 * @var  object  The content view object
	 */
	public $view;

	/**
	 * @var  array  values passed to view, usually $_POST
	 */
	public $values;

	/**
	 * @var  array  filters passed to view, usually $_GET
	 */
	public $filters;

	/**
	 * Responsible for determining what view class to instantiate
	 */
	public function before()
	{
		$path = array(
			$this->request->directory(),
			$this->request->controller(),
			$this->request->action(),
		);
		$path = trim(implode('/', $path), '/');

		// Send $_POST and $_GET to the view by default
		$this->values = $_POST;
		$this->filters = $_GET;

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

	/**
	 * Responsible for setting the response after the controller action has executed
	 */
	public function after()
	{
		if ($this->view === NULL)
			throw new Kohana_View_Exception('There was no View created for this request.');

		$this->view
			->set('request', $this->request)
			->set('values', $this->values)
			->set('filters', $this->filters);

		$this->response->body($this->view);
	}

}
