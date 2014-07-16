<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> trans('admin.defaults'),

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> trans('admin.default'),

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
			'title'		=> trans('admin.title'),
		],
		'attribute' => [
			'title'			=> trans('admin.attributes'),
			'relationship'	=> 'Attribute',
			'select'     => 'GROUP_CONCAT((:table).title ORDER BY (:table).title ASC SEPARATOR ", ")',
		],
	],

	/**
	 * The filter set
	 */
	'filters' => [
		'title' => [
			'title' => trans('admin.title'),
		],
		'attribute' => [
			'title' => trans('admin.attributes'),
			'type' => 'relationship',
			'name_field' => 'title',
		],
	],

	'edit_fields' => [
		'title' => [
			'title'			=> trans('admin.title'),
			'type'			=> 'text',
		],
		'attribute' => [
			'title'			=> trans('admin.attribute'),
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],

	],
];