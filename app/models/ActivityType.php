<?php

class ActivityType extends Eloquent {
	protected $fillable = [];

    public function role()
    {
        return $this->belongsTo('Role');
    }

    public function user()
    {
        return $this->hasMany('User', 'activity_type_id');
    }
}