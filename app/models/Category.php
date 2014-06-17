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

    public function scopeParentName()
    {
        $name = DB::table('categories')
        ->whereExists(function($query)
        {
            $query->select('p_cat.title')
                  ->from('categories')
                  ->join('categories as p_cat', 'p_cat.id', '=', 'categories.id');
        })
        ->get();
        dd($name);
        return $name;
    }


    public function children()
    {
        return $this->hasMany('Category', 'parent_id');
    }

/*    public function name()
    {
        return $this->title;
    }*/

}