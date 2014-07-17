<?php

/**
 * The main site settings page
 */

return array(

	/**
	 * Settings page title
	 *
	 * @type string
	 */
	'title' => trans('admin.settings'),

	/**
	 * The edit fields array
	 *
	 * @type array
	 */
	'edit_fields' => array(
		'popular_sections_count' => array(
			'title' => trans('admin.popular_sections_count'),
			'type' => 'enum',
		    'options' => [0 => '0', 3 => '3', 6 => '6'],
		),
		'popular_products_count' => array(
			'title' => trans('admin.popular_products_count'),
			'type' => 'enum',
		    'options' => [0 => '0', 3 => '3', 6 => '6'],
		),
		'page_cache_lifetime' => array(
			'title' => 'Page Cache Lifetime (in minutes)',
			'type' => 'number',
		),
	),

	/**
	 * The validation rules for the form, based on the Laravel validation class
	 *
	 * @type array
	 */
	'rules' => array(
	),

	/**
	 * This is run prior to saving the JSON form data
	 *
	 * @type function
	 * @param array		$data
	 *
	 * @return string (on error) / void (otherwise)
	 */
	'before_save' => function(&$data)
	{
		//
	},

	/**
	 * The permission option is an authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view this settings page. Any "falsey" response will result in a 404.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
		return true;
		//return Auth::user()->hasRole('developer');
	},

	/**
	 * This is where you can define the settings page's custom actions
	 */
	'actions' => array(
		//Ordering an item up
		'clear_page_cache' => array(
			'title' => 'Clear Page Cache',
			'messages' => array(
				'active' => 'Clearing cache...',
				'success' => 'Page Cache Cleared',
				'error' => 'There was an error while clearing the page cache',
			),
			//the settings data is passed to the closure and saved if a truthy response is returned
			'action' => function(&$data)
			{
				Cache::forget('pages');

				return true;
			}
		),
	),
);