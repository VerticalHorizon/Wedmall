<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> 'Categories',

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> 'category',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Category',

	'form_width' => 500,

	/**
	 * Columns
	 */
	'columns' => [
		'title' => [
			'title'		=> 'Title'
		],
		'description' => [
			'title'		=> 'Description'
		],
		'photos' => [
			'title'		=> 'Photos'
		],
		'popularity' => [
			'title'		=> 'Popularity'
		],
/*		'parameters' => [
			'title'			=> 'Additional Parameters',
			'relationship'	=> 'AdditionalParam',
			'select'		=> '(:table).title',
		],*/
		'parentname' => [
			'title'			=> 'Parent',
/*			'relationship'	=> 'Category',
			'select'		=> '(:table).title',*/
		],
	],

	'edit_fields' => [
		'title' => [
			'title'			=> 'Title',
			'type'			=> 'text',
		],
		'description' => [
			'title'			=> 'Description',
			'type'			=> 'textarea',
			'limit'			=> 300,
			'height'		=> 130,
		],
		'parameters' => [
			'title'			=> 'Add. Parameters',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
			'sort_field' 	=> 'alias',
		],
		'parent' => [
			'title'			=> 'Parent',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],

	],
];