<?php
use LaravelBook\Ardent\Ardent;

class Category extends Ardent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $guarded = [];

    public static $rules = [
        'title'                  => 'required|between:4,30',
    ];

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

    public function beforeSave()
    {
        $this->attributes['alias'] = $this->attributes['alias'] ? $this->attributes['alias'] : Slug::make($this->attributes['title']);
    }

    /**
     * For frozennode/administrator
     */
    public function getParentTitleAttribute()
    {
        return $this->parent === NULL ? NULL : $this->parent->title;
    }
}