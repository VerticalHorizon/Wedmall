<?php

class Color extends Eloquent {

	protected $fillable = [];

    public function products()
    {
        return $this->morphedByMany('Product', 'colorable');
    }

    public function photos()
    {
        return $this->morphedByMany('Photo', 'colorable');
    }
}