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
        'attribute' => [
            'title'         => 'Attributes',
            'relationship'   => 'Attribute',
            'select'     => 'GROUP_CONCAT((:table).title ORDER BY (:table).title ASC SEPARATOR ", ")',
        ],
        'parent_title' => [
            'title'         => 'Parent',
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
        ],
        'parent' => [
            'title'         => 'Parent',
            'type'          => 'relationship',
            'name_field'    => 'title',
        ],

    ],

];