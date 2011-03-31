<?php defined('SYSPATH') or die('No direct script access.');
/**
 * A base view for pages in the application to extend
 */
abstract class View_Page extends Kostache_Layout {

	protected $_layout = 'page';

	public $show_breadcrumbs = TRUE;

	public function title()
	{
		$request = $this->request;
		$path = array($request->directory(), $request->controller(), $request->action());
		$path = trim(implode('.', $path), '.');

		return __(Kohana::message('titles', $path));
	}

	public function body_id()
	{
		$request = $this->request;
		$path = array($request->directory(), $request->controller(), $request->action());
		$path = trim(implode('_', $path), '_');

		return $path;
	}

	public function story_index_url()
	{
		return Route::url('story');
	}
}
