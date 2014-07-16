<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> trans('admin.attributes'),

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> trans('admin.attribute'),

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'Attribute',

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
		'alias' => [
			'title'		=> trans('admin.alias'),
		],
		'category' => [
			'title'			=> trans('admin.category'),
			'relationship'   => 'Category',
            'select'     => 'GROUP_CONCAT((:table).title ORDER BY (:table).title ASC SEPARATOR ", ")',
		],
		'default_titles' => [
			'title'			=> trans('admin.defaults'),
			/*'relationship'   => 'DefaultValue',
            'select'     => 'GROUP_CONCAT((:table).title ORDER BY (:table).title ASC SEPARATOR ", ")',*/
		],
	],

	/**
	 * The filter set
	 */
	'filters' => [
		'title' => [
			'title' => trans('admin.title'),
		],
		'alias' => [
			'title' => trans('admin.alias'),
		],
		'updated_at' => [
			'title' => trans('admin.updated'),
			'type' => 'date',
			'date_format' => 'yy-mm-dd',
		],
		'category' => [
			'title' => trans('admin.category'),
			'type' => 'relationship',
			'name_field' => 'title',
		],
	],

	/**
	 * The editable fields
	 */
	'edit_fields' => [
		'title' => [
			'title'			=> trans('admin.title'),
			'type'			=> 'text',
		],
		'alias' => [
			'title'			=> trans('admin.alias'),
			'type'			=> 'text',
		],
		'category' => [
			'title'			=> trans('admin.categories'),
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],
		'defaults' => [
			'title'			=> trans('admin.defaults'),
			'type'			=> 'relationship',
			'name_field'	=> 'title',
		],
	],
];