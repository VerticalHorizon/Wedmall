<?php

class Topic extends Eloquent {
	protected $fillable = [];

	public function articles()
    {
        return $this->hasMany('Article');
    }

    public function parent()
    {
        return $this->belongsTo('Topic', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('Topic', 'parent_id');
    }
}