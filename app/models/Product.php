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

/*    public function parameters() {
        //return $this->hasManyThrough('AdditionalParam', 'Category', 'country_id', 'user_id');
        return $this->hasMany('AdditionalParam', 'add_params', 'product_id', 'param_id')->withPivot('param_value');
    }*/

    // public function scopeWithParameters($query, $product_id = NULL){      // TODO: prevent SQL Injection
    //     $query
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->leftJoin('add_params', 'categories.id', '=', 'add_params.category_id')
    //     ->leftJoin('add_values', function($join)
    //     {
    //         $join->on('add_values.product_id', '=', 'products.id')
    //              ->on('add_values.param_id', '=', 'add_params.id');
    //     })
    //     ->select('products.*', 'add_params.alias', 'add_params.title as param_title', 'add_values.param_value');
    //     //->where('add_values.param_value', '!=', 0);
    //     return $product_id ? $query->where('products.id', $product_id) : $query;
    // }

    public function scopeSearch($query, $alias = NULL, $input = [])
    {
        $query
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->leftJoin('add_params', 'categories.id', '=', 'add_params.category_id')
        ->leftJoin('add_values', function($join)
        {
            $join->on('add_values.product_id', '=', 'products.id')
                 ->on('add_values.param_id', '=', 'add_params.id');
        })
        ->select('products.*', 'add_params.alias AS param_alias', 'add_values.param_value', 'add_params.title AS param_title')
        ->where(function($query) use ($alias)
        {
            !$alias ?: $query->where('categories.alias', $alias);
            !(Input::has('price-from') && Input::has('price-to')) ?: $query->whereBetween('price', array( Input::get('price-from'), Input::get('price-to') ));

            $i = 0;
            foreach (Input::except('price-from', 'price-to', 'q') as $key => $value) {
                if (is_array($value))
                {   
                    $i ? $query->orWhere('add_params.alias', $key) : $query->where('add_params.alias', $key);
                    $query->whereIn('param_value', array_keys($value));
                    $i++;
                }
            }
        });
        return $query;
    }
}