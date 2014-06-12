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
		'name' => [
			'title' => 'Name'
		],
	],

	'edit_fields' => [
		'title' => [
			'title' => 'Title',
			'type' => 'text',
		],
	],
];