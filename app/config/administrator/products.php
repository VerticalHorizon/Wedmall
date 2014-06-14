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
	'single'	=> 'Product',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Product',

	/**
	 * Columns
	 */
	'columns' => [
		'title' => [
			'title' => 'Title'
		],
		'description' => [
			'title' => 'Description'
		],
		'color' => [
			'title' => 'Color'
		],
		'popularity' => [
			'title' => 'Popularity'
		],
		'category' => [
			'title' => 'Category'
		],
	],

	'edit_fields' => [
		'title' => [
			'title' => 'Title',
			'type' => 'text',
		],
		'description' => [
			'title' => 'Description',
			'type' => 'text',
		],
		'category' => [
			'title' => 'Category',
			'type' => 'relationship',
		],

	],
];