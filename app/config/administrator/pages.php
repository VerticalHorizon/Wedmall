<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> trans('admin.general_pages'),

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> trans('admin.general_page'),

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Page',

	'form_width' => 900,

    'rules' => [
        'title' => 'required',
    ],

	/**
	 * Columns
	 */
	'columns' => [
		'title' => [
			'title'		=> trans('admin.title'),
		],
		'alias' => [
			'title'		=> trans('admin.alias'),
		],
		'meta_keywords' => [
			'title'		=> trans('admin.meta_keywords'),
		],
		'meta_description' => [
			'title'		=> trans('admin.meta_description'),
		],

	],

	'edit_fields' => [
		'title' => [
			'title'			=> trans('admin.title'),
			'type'			=> 'text',
		],
		'alias' => [
			'title'			=> trans('admin.alias'),
			'type'			=> 'text',
		],
		'content' => [
			'title'			=> trans('admin.content'),
			'type'			=> 'wysiwyg',
		],
		'meta_keywords' => [
			'title'			=> trans('admin.meta_keywords'),
			'type'			=> 'text',
		],
		'meta_description' => [
			'title'			=> trans('admin.meta_description'),
			'type'			=> 'textarea',
			'limit'			=> 300,
			'height'		=> 130,
		],
	],
];