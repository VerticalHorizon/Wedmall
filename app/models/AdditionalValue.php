<?php

class AdditionalValue extends Eloquent {

    public function category()
    {
        return $this->belongsTo('Product');
    }

    public function parameter()
    {
        return $this->belongsTo('AdditionalParam');
    }
}