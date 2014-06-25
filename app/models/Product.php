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
        return $this->hasMany('AdditionalValue', 'product_id');
    }

    public function parameters() {
        return $this->belongsToMany('AdditionalParam', 'add_values', 'product_id', 'param_id')->withPivot('param_value');
    }

    public function scopeSearch($query, $alias = NULL)
    {
        $source = $query
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->leftJoin('add_params', 'categories.id', '=', 'add_params.category_id')
        ->leftJoin('add_values', function($join)
        {
            $join->on('add_values.product_id', '=', 'products.id')
                 ->on('add_values.param_id', '=', 'add_params.id');
        })
        ->select('products.*', 'add_params.alias AS param_alias', 'add_params.title AS param_title', 'add_values.param_value')
        ->where(function($query) use ($alias)
        {
            ! $alias ?: $query->where('categories.alias', $alias);
            ! (Input::has('price-from') && Input::has('price-to')) ?: $query->whereBetween('price', array( Input::get('price-from'), Input::get('price-to') ));
            ! Input::has('q') ?: $query->where(function($query)
            {
              $query->where('products.title', 'LIKE', '%'.Input::get('q').'%');
              $query->orWhere('products.description', 'LIKE', '%'.Input::get('q').'%');
            });

            empty(Input::except('price-from', 'price-to', 'q')) ?: $query->where(function($query)
            {              
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
        })
        ->get();
        
        # transform rows to nested array
        $result = [];
        $node = 'param';    # nodes

        foreach ($source->toArray() as $key => $value) {
            if(!isset($result[$value['id']]))
                $result[$value['id']] = $value;

            foreach ($value as $k => $v) {
                if (strpos($k, $node) !== FALSE) {
                    $result[$value['id']][$node][$k][] = $v;
                    unset($result[$value['id']][$k]);
                }
            }
        }

        return $result;
        // $products = Product::with([    # fucking eloquent!
        // 'category' => function($query) use ($alias)
        // {
        //   $query->where('alias', $alias);
        // },
        // 'parameters' => function($query)
        // {
        //         $i = 0;
        //         foreach (Input::except('price-from', 'price-to', 'q') as $key => $value) {
        //             if (is_array($value))
        //             {   
        //                 $i ? $query->orWhere('add_params.alias', $key) : $query->where('add_params.alias', $key);
        //                 $query->whereIn('param_value', array_keys($value));
        //                 $i++;
        //             }
        //         }
        // }])
        // ->get()
        // ->toArray();
    }
}