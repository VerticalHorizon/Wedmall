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


    /**
     * For frozennode/administrator
     */
    public function getParentTitleAttribute()
    {
        return $this->getAttribute('parent') === NULL ? NULL : $this->getAttribute('parent')->getAttribute('title');
    }
    public function getAttrTitlesAttribute()
    {
        $titles = NULL;
        
        if($this->getAttribute('parameters') !== NULL)
            $this->getAttribute('parameters')->each(function($param) use (&$titles) {
                $titles .= $param->title.'; ';
            });
        
        return trim($titles);
    }
}