<?php defined('SYSPATH') or die('No direct script access.');

class View_Story_Index extends View_Page
{
	public $show_breadcrumbs = FALSE;

	public function stories()
	{
		$stories = Model::factory('story')->find_all();
		$data = array();

		foreach ($stories as $story)
		{
			$item = $story->as_array();
			// Add the urls
			$item['view_url'] = Route::url('story', array(
				'action' => 'view',
				'id'     => $story->id,
			));
			$item['edit_url'] = Route::url('story', array(
				'action' => 'edit',
				'id'     => $story->id,
			));
			$item['delete_url'] = Route::url('story', array(
				'action' => 'delete',
				'id'     => $story->id,
			));

			$data[] = $item;
		}

		return $data;
	}

	public function new_story()
	{
		return array(
			'url'  => Route::url('story', array(
				'action' => 'add',
			)),
			'text' => 'Add a New Story',
		);
	}
}
