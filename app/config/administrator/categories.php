<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title'     => 'Categories',

    /**
     * The singular name of model
     *
     * @type string
     */
    'single'    => 'category',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Category',

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
            'title'     => 'Title'
        ],
        'description' => [
            'title'     => 'Description'
        ],
        'photos' => [
            'title'     => 'Photos'
        ],
        'popularity' => [
            'title'     => 'Popularity'
        ],
        'attr_titles' => [
            'title'         => 'Attributes',
            // 'relationship'   => 'AdditionalParam',
            // 'select'     => '(:table).title',
        ],
        'parent_title' => [
            'title'         => 'Parent',
            // 'relationship'   => 'Category',
            // 'select'     => '(:table).title',
        ],
    ],

    'edit_fields' => [
        'title' => [
            'title'         => 'Title',
            'type'          => 'text',
        ],
        'alias' => [
            'title'         => 'Alias',
            'type'          => 'text',
        ],
        'description' => [
            'title'         => 'Description',
            'type'          => 'textarea',
            'limit'         => 300,
            'height'        => 130,
        ],
        'attribute' => [
            'title'         => 'Attributes',
            'type'          => 'relationship',
            'name_field'    => 'alias',
            'sort_field'    => 'alias',
        ],
        'parent' => [
            'title'         => 'Parent',
            'type'          => 'relationship',
            'name_field'    => 'title',
        ],

    ],
];