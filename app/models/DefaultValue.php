<?php

class DefaultValue extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'default_values';

    public $timestamps = false;

	protected $fillable = [];

    public function attribute()
    {
        return $this->belongsToMany('Attribute', 'attributes_defaults', 'attribute_id', 'value_id');
    }
}