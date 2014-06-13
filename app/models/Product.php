<?php

class Product extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function values()
    {
        return $this->hasMany('AdditionalValue', 'param_id');
    }

    public function parameters() {
        //return $this->hasManyThrough('AdditionalParam', 'Category', 'country_id', 'user_id');
    }

    public function scopeWithParameters($query, $product_id = NULL){      // TODO: prevent SQL Injection
        $query
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->leftJoin('add_params', 'categories.id', '=', 'add_params.category_id')
        ->leftJoin('add_values', function($join)
        {
            $join->on('add_values.product_id', '=', 'products.id')
            ->on('add_values.param_id', '=', 'add_params.id');
        })
        ->select('products.*', 'categories.title', 'add_params.alias');
        //->where('add_values.param_value', '!=', 0);
        return $product_id ? $query->where('products.id', $product_id) : $query;
    }

}