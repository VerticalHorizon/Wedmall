<?php

class Value extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'values';

    public $timestamps = false;

    protected $fillable = ['param_value'];

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function attribute()
    {
        return $this->belongsTo('Attribute', 'param_id');
    }

    public function value()
    {
        return $this->belongsTo('DefaultValue', 'param_value');
    }
}