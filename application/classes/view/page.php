<?php defined('SYSPATH') or die('No direct script access.');
/**
 * A base view for pages in the application to extend
 */
abstract class View_Page
{
	public $show_breadcrumbs = TRUE;

	public function title()
	{
		$request = Request::current();
		$path = array($request->directory(), $request->controller(), $request->action());
		$path = trim(implode('.', $path), '.');
		return __(Kohana::message('titles', $path));
	}

	public function body_id()
	{
		$request = Request::current();
		$id = array($request->directory(), $request->controller(), $request->action());
		$id = trim(implode('_', $path), '_');
		return $id;
	}

	public function urls()
	{
		return array(
			'story_index' => Route::get('story')->uri(array('action' => 'index')),
		);
	}

	public function content()
	{
		// @TODO
	}
}
