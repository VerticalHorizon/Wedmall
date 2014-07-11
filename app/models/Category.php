<?php

class Category extends Eloquent {

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
        return $this->belongsTo('Category');
    }

    public function children()
    {
        return $this->hasMany('Category', 'parent_id');
    }


    /**
     * For frozennode/administrator
     */
    public function getParentTitleAttribute()   # TODO: refactor!
    {
        return $this->getAttribute('parent') === NULL ? NULL : $this->getAttribute('parent')->getAttribute('title');
    }
    public function getAttrTitlesAttribute()
    {
        $titles = NULL;
        
        if($this->getAttribute('attribute') !== NULL)
            $this->getAttribute('attribute')->each(function($param) use (&$titles) {
                $titles .= $param->title.'; ';
            });
        
        return trim($titles);
    }
}