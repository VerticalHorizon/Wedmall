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
	'model'	=> 'AdditionalParam',

	'form_width' => 500,

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
		'category' => [
			'title'			=> 'Category',
			'relationship'	=> 'Category',
			'select'		=> '(:table).title',
		],
	],

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
			'title'			=> 'Category',
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],

	],
];