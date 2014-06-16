<?php

class Category extends Eloquent {

	public function product()
    {
        return $this->hasMany('Product');
    }

    public function parameters()
    {
        return $this->hasMany('AdditionalParam');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('Category', 'parent_id');
    }

    public function closest_parent()
    {
        return $this->belongsTo('Category', 'parent_id')->first();
    }

/*    public function name()
    {
        return $this->title;
    }*/

}