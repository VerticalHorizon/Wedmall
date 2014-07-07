<?php

class ActivityType extends Eloquent {
	protected $fillable = [];

    public function role()
    {
        return $this->belongsTo('Role');
    }
}