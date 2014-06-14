<?php

class AdditionalParam extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'add_params';

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

  //   public function scopeKeyvalue($query)
  //   {
		// return $query->join('add_values', function($join)
		// {
		// 	$join->on('add_values.param_id', '=', 'add_params.id');
		// })
		// ->get();
  //   }
}