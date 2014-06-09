<?php

class AdditionalParams extends Eloquent {

    public function category()
    {
        return $this->belongsTo('Category');
    }

}