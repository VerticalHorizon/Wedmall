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

    public function brand()
    {
        return $this->belongsTo('Brand');
    }

    public function colors()
    {
        return $this->morphToMany('Color', 'colorable');
    }

    public function value()
    {
        return $this->hasMany('Value', 'product_id');
    }

    public function attribute() {
        return $this->belongsToMany('Attribute', 'values', 'product_id', 'param_id')->withPivot('param_value');
    }

    public function scopeSearch($query, $arguments)     # TODO: refactor
    {
        $category = Input::get('category', NULL);
        $color = Input::get('color', []);
        $brand = Input::get('brand', []);

        extract($arguments, EXTR_OVERWRITE);

        if($color)
        {
            $query
            ->leftJoin('colorables', 'colorables.colorable_id', '=', 'products.id')
            ->leftJoin('colors', 'colorables.color_id', '=', 'colors.id')
            ->where(function($query) use (&$color)
            {
                $query->where('colorables.colorable_type', get_class($this));     # consider polymorphic relation with color

                $i = 0;
                foreach ($color as &$value) {
                    $i ? $query->orWhere('colors.alias', $value) : $query->where('colors.alias', $value);
                    $i++;
                }
            });
        }
        
        if($category)
        {
            $query
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->leftJoin('categories_attributes', 'categories.id', '=', 'categories_attributes.category_id')
            ->leftJoin('attributes', 'attributes.id', '=', 'categories_attributes.attribute_id')
            ->leftJoin('values', function($join)
            {
                $join->on('values.product_id', '=', 'products.id')
                     ->on('values.param_id', '=', 'attributes.id');
            })
            ->where(function($query) use (&$category)
            {

                $query->where('categories.alias', $category);

                empty(Input::except('price-from', 'price-to', 'color', 'brand_id', 'q')) ?: $query->where(function($query)
                {              
                  $i = 0;
                  foreach (Input::except('price-from', 'price-to', 'color', 'brand_id', 'q') as $key => $value) {
                      if (is_array($value))
                      {   
                          $i ? $query->orWhere('attributes.alias', $key) : $query->where('attributes.alias', $key);
                          $query->whereIn('param_value', array_keys($value));
                          $i++;
                      }
                  }
                });
            });
        }

        $query
        ->where(function($query)
        {
                // empty($brand) ?: $query->where(function($query) use ($brand)
                // {                
                //     $i = 0;
                //     foreach ($brand as &$value) {
                //         $i ? $query->orWhere('brands.alias', $value) : $query->where('brands.alias', $value);
                //         $i++;
                //     }
                // });

                if(Input::has('brand_id'))
                {
                    $query
                    ->leftJoin('brands', 'brands.id', '=', 'products.brand_id')
                    ->whereIn('brand_id', Input::get('brand_id'));
                }

                ! (Input::has('price-from') && Input::has('price-to')) ?: $query->whereBetween('price', [Input::get('price-from'), Input::get('price-to')]);

                ! Input::has('q') ?: $query->where(function($query)
                {
                    $query->where('products.title', 'LIKE', '%'.Input::get('q').'%');
                    $query->orWhere('products.description', 'LIKE', '%'.Input::get('q').'%');
                });
        })
        ->select('products.*')
        ->groupBy('products.id');
        
        return $query->get()->toArray();
    }
}