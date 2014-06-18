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
			// 'relationship'	=> 'Role',
			// 'select'		=> '(:table).name',
		],
		'created_at' => [
			'title'		=> 'Created'
		],
		'updated_at' => [
			'title'		=> 'Updated',
		],
	],

	'edit_fields' => [
		'id'	=> [
			'title'			=> 'ID',
			'type'			=> 'key',
		],
		'username' => [
			'title'			=> 'User Name',
			'type'			=> 'text',
			'limit'			=> 40,
		],
		'roles' => [
			'title'			=> 'Roles',
			'type'			=> 'relationship',
			'name_field'	=> 'name',
		],

	],
];