<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> trans('admin.slider'),

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> trans('admin.slide'),

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Slider',

	'form_width' => 500,

    'rules' => [
        'title' => 'required',
        'photo' => 'required',
    ],

	/**
	 * Columns
	 */
	'columns' => [
		'description' => [
			'title'		=> trans('admin.description'),
		],
		'photo' => [
			'title'		=> trans('admin.photo'),
			'output' => '<img src="/uploads/slides/detail/(:value)" height="100" />',
			'sortable' => false,
		],
		'link' => [
			'title'		=> trans('admin.link'),
			'output' => '<a href="(:value)" target="_blank">(:value)</a>',
			'sortable' => false,
		],
	],

	'edit_fields' => [
		'description' => [
			'title'			=> trans('admin.description'),
			'type'			=> 'textarea',
			'limit'			=> 300,
			'height'		=> 130,
		],
		'link' => [
			'title'			=> trans('admin.link'),
			'type'			=> 'text',
		],
		'photo' => [
			'title'			=> trans('admin.photo'),
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