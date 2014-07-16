<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> trans('admin.users'),

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> trans('admin.user'),

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model'	=> 'User',

	'form_width' => 500,

	'rules' => [
        'username' => 'required|min:3|max:80|alpha_dash|unique:users,username',
        'email' => 'required|between:3,64|email|unique:users',
        'password' => 'required|alpha_num|between:4,16|confirmed',
	],

	/**
	 * Columns
	 */
	'columns' => [
		'username' => [
			'title'		=> trans('admin.title'),
		],
		'email' => [
			'title'		=> trans('admin.email'),
		],
		'confirmed' => [
			'title'		=> trans('admin.confirmed'),
		],
		'roles_names' => [
			'title'			=> trans('admin.roles'),
		],
		'created_at' => [
			'title'		=> trans('admin.created'),
		],
		'updated_at' => [
			'title'		=> trans('admin.updated'),
		],
	],

	/**
	 * The filter set
	 */
	'filters' => [
		'username' => [
			'title' => trans('admin.user_name'),
		],
		'first_name' => [
			'title' => trans('admin.first_name'),
		],
		'second_name' => [
			'title' => trans('admin.second_name'),
		],
		'roles' => [
			'title'			=> trans('admin.roles'),
			'type'			=> 'relationship',
			'name_field'	=> 'name',
		],
		'birth_date' => [
			'title' => trans('admin.birth_date'),
			'type' => 'date'
		],
	],

	/**
	 * The editable fields
	 */
	'edit_fields' => [
		'id'	=> [
			'title'			=> 'ID',
			'type'			=> 'key',
		],
		'username' => [
			'title'			=> trans('admin.user_name'),
			'type'			=> 'text',
			'limit'			=> 80,
		],
		'first_name' => [
			'title'			=> trans('admin.first_name'),
			'type'			=> 'text',
			'limit'			=> 40,
		],
		'second_name' => [
			'title'			=> trans('admin.second_name'),
			'type'			=> 'text',
			'limit'			=> 40,
		],
		'birth_date' => [
			'title' => trans('admin.birth_date'),
			'type' => 'date'
		],
		'password' => [
			'title'			=> trans('admin.password'),
			'type'			=> 'password',
		],
		'roles' => [
			'title'			=> trans('admin.roles'),
			'type'			=> 'relationship',
			'name_field'	=> 'name',
		],

	],
];