<?php

return [
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title'		=> 'Users',

	/**
	 * The singular name of model
	 *
	 * @type string
	 */
	'single'	=> 'user',

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
			'title'		=> 'Title'
		],
		'email' => [
			'title'		=> 'Email'
		],
		'confirmed' => [
			'title'		=> 'Confirmed'
		],
		'roles_names' => [
			'title'			=> 'Roles',
		],
		'created_at' => [
			'title'		=> 'Created'
		],
		'updated_at' => [
			'title'		=> 'Updated',
		],
	],

	/**
	 * The filter set
	 */
	'filters' => [
		'username' => [
			'title' => 'User Name',
		],
		'first_name' => [
			'title' => 'First Name',
		],
		'last_name' => [
			'title' => 'Last Name',
		],
		'roles' => [
			'title'			=> 'Roles',
			'type'			=> 'relationship',
			'name_field'	=> 'name',
		],
		'birth_date' => [
			'title' => 'Birth Date',
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
			'title'			=> 'User Name',
			'type'			=> 'text',
			'limit'			=> 80,
		],
		'first_name' => [
			'title'			=> 'First name',
			'type'			=> 'text',
			'limit'			=> 40,
		],
		'second_name' => [
			'title'			=> 'Second name',
			'type'			=> 'text',
			'limit'			=> 40,
		],
		'birth_date' => [
			'title' => 'Birth Date',
			'type' => 'date'
		],
		'password' => [
			'title'			=> 'Password',
			'type'			=> 'password',
		],
		'roles' => [
			'title'			=> 'Roles',
			'type'			=> 'relationship',
			'name_field'	=> 'name',
		],

	],
];