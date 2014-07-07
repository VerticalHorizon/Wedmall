<?php

class AdditionalParam extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'add_params';

    public $timestamps = false;

	//protected $fillable = array('alias', 'title', 'category_id');

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function paramValues()
    {
        return $this->hasMany('AdditionalValue', 'param_id');
    }

    public function products()
    {
        return $this->belongsToMany('Product', 'add_values', 'param_id', 'product_id')->withPivot('param_value');
    }

    public function getDefaultAttribute($value)
    {
        return $value === '' ? NULL : json_decode( $value );
    }

    public function setDefaultAttribute($value)
    {
        $this->attributes['default'] = $value === '' ? '' : json_encode( $value );
    }

}