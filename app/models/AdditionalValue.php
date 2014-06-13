<?php

class AdditionalValue extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'add_values';

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function parameter()
    {
        return $this->belongsTo('AdditionalParam', 'param_id');
    }
}