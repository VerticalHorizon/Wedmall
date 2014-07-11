<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> 'Attributes',

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> 'attribute',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Attribute',

	'form_width' => 500,

    'rules' => [
        'title' => 'required',
        'alias' => 'required',
    ],

	/**
	 * Columns
	 */
	'columns' => [
		'title' => [
			'title'		=> 'Title'
		],
		'alias' => [
			'title'		=> 'Alias'
		],
		'category_titles' => [
			'title'			=> 'Category',
		],
		'default_titles' => [
			'title'			=> 'Defaults',
		],
	],

	/**
	 * The filter set
	 */
	'filters' => [
		'title' => [
			'title' => 'Title',
		],
		'alias' => [
			'title' => 'Alias',
		],
		'updated_at' => [
			'title' => 'Updated',
			'type' => 'date',
			'date_format' => 'yy-mm-dd',
		],
		'category' => [
			'title' => 'Category',
			'type' => 'relationship',
			'name_field' => 'title',
		],
	],

	/**
	 * The editable fields
	 */
	'edit_fields' => [
		'title' => [
			'title'			=> 'Title',
			'type'			=> 'text',
		],
		'alias' => [
			'title'			=> 'Alias',
			'type'			=> 'text',
		],
		'category' => [
			'title'			=> 'Categories',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],
		'defaultValue' => [
			'title'			=> 'Defaults',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],
	],
];