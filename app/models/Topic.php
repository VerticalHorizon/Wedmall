<?php
use LaravelBook\Ardent\Ardent;

class Topic extends Ardent {
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

    public function beforeSave()
    {
        $this->attributes['alias'] = $this->attributes['alias'] ? $this->attributes['alias'] : Slug::make($this->attributes['title']);
    }
}