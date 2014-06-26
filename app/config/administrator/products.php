<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> 'Products',

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> 'product',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Product',

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
		'color' => [
			'title'		=> 'Colors',
			// 'relationship'	=> 'Color',
			// 'select'		=> '(:table).alias',
		],
		'popularity' => [
			'title'		=> 'Popularity'
		],
		'category' => [
			'title'			=> 'Category',
			'relationship'	=> 'Category',
			'select'		=> '(:table).title',
		],
	],

	'edit_fields' => [
		'id'	=> [
			'title'			=> 'ID',
			'type'			=> 'key',
		],
		'title' => [
			'title'			=> 'Title',
			'type'			=> 'text',
			'limit'			=> 40,
		],
		'description' => [
			'title'			=> 'Description',
			'type'			=> 'textarea',
			'limit'			=> 300,
			'height'		=> 130,
		],
		'category' => [
			'title'			=> 'Category',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],
		'colors' => [
			'title'			=> 'Color',
			'type'			=> 'relationship',
			'name_field'	=> 'alias',
		],

	],
];