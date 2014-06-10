<?php

class AdditionalParam extends Eloquent {

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function values()
    {
        return $this->hasMany('AdditionalValue');
    }

}