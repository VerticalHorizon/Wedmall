<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> 'Slider',

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> 'slide',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Slider',

	'form_width' => 500,

	/**
	 * Columns
	 */
	'columns' => [
		'description' => [
			'title'		=> 'Description'
		],
		'photo' => [
			'title'		=> 'Photo',
			'output' => '<img src="/uploads/slides/detail/(:value)" height="100" />',
			'sortable' => false,
		],
		'link' => [
			'title'		=> 'Link',
			'output' => '<a href="(:value)" target="_blank">(:value)</a>',
			'sortable' => false,
		],
	],

	'edit_fields' => [
		'description' => [
			'title'			=> 'Description',
			'type'			=> 'textarea',
			'limit'			=> 300,
			'height'		=> 130,
		],
		'link' => [
			'title'			=> 'Link',
			'type'			=> 'text',
		],
		'photo' => [
			'title'			=> 'Photo',
			'type'			=> 'image',
			'naming'		=> 'random',
			'location'		=> public_path().'/uploads/slides/originals/',
			'size_limit'	=> 2,
	        'sizes' => [
	            [714, 334, 'crop', public_path().'/uploads/slides/detail/', 100],
	        ]
		],

	],
];