<?php

class Value extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'values';

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function attribute()
    {
        return $this->belongsTo('Attribute', 'param_id');
    }
}