<?php

class Category extends Eloquent {

    protected $guarded = [];

	public function product()
    {
        return $this->hasMany('Product');
    }

    public function attribute()
    {
        return $this->belongsToMany('Attribute', 'categories_attributes', 'category_id', 'attribute_id');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('Category', 'parent_id');
    }

    public function beforeSave( $forced = false ){

        parent::beforeSave( $forced );

        Log::error(print_r($this->attributes));
        //$this->attributes['alias'] = $this->attributes['alias'] ? $this->attributes['alias'] : Slug::make($this->attributes['title']);
    }

    /**
     * For frozennode/administrator
     */
    public function getParentTitleAttribute()
    {
        return $this->parent === NULL ? NULL : $this->parent->title;
    }
}