<?php
use LaravelBook\Ardent\Ardent;

class Brand extends Ardent {
	protected $fillable = [];

    public function beforeSave()
    {
        $this->attributes['alias'] = $this->attributes['alias'] ? $this->attributes['alias'] : Slug::make($this->attributes['title']);
    }

}