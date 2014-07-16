<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title'     => trans('admin.categories'),

    /**
     * The singular name of model
     *
     * @type string
     */
    'single'    => trans('admin.category'),

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
            'title'     => trans('admin.title')
        ],
        'description' => [
            'title'     => trans('admin.description')
        ],
        'photos' => [
            'title'     => trans('admin.photos')
        ],
        'popularity' => [
            'title'     => trans('admin.popularity')
        ],
        'attribute' => [
            'title'         => trans('admin.attributes'),
            'relationship'   => 'Attribute',
            'select'     => 'GROUP_CONCAT((:table).title ORDER BY (:table).title ASC SEPARATOR ", ")',
        ],
        'parent_title' => [
            'title'         => trans('admin.parent'),
        ],
    ],

    'edit_fields' => [
        'title' => [
            'title'         => trans('admin.title'),
            'type'          => 'text',
        ],
        'alias' => [
            'title'         => trans('admin.alias'),
            'type'          => 'text',
        ],
        'description' => [
            'title'         => trans('admin.description'),
            'type'          => 'textarea',
            'limit'         => 300,
            'height'        => 130,
        ],
        'attribute' => [
            'title'         => trans('admin.attributes'),
            'type'          => 'relationship',
            'name_field'    => 'alias',
        ],
        'parent' => [
            'title'         => trans('admin.parent'),
            'type'          => 'relationship',
            'name_field'    => 'title',
        ],

    ],

];