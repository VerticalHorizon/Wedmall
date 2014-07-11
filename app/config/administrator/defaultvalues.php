<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> 'Default Values',

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> 'default value',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'DefaultValue',

	'form_width' => 500,

    'rules' => [
        'title' => 'required',
    ],

	/**
	 * Columns
	 */
	'columns' => [
		'title' => [
			'title'		=> 'Title'
		],
	],

	/**
	 * The filter set
	 */
	'filters' => [
		'title' => [
			'title' => 'Title',
		],
		'attribute' => [
			'title' => 'Attributes',
			'type' => 'relationship',
			'name_field' => 'title',
		],
	],

	'edit_fields' => [
		'title' => [
			'title'			=> 'Title',
			'type'			=> 'text',
		],
		'attribute' => [
			'title'			=> 'Attributes',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],

	],
];