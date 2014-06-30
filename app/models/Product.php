<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Product extends Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

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

    public function values()
    {
        return $this->hasMany('AdditionalValue', 'product_id');
    }

    public function parameters() {
        return $this->belongsToMany('AdditionalParam', 'add_values', 'product_id', 'param_id')->withPivot('param_value');
    }

    public function scopeSearch($query, $arguments)
    {
        $category = Input::get('category', NULL);
        $color = Input::get('color', []);
        $brand = Input::get('brand', []);

        extract($arguments, EXTR_OVERWRITE);

        ! $category ?: $query->leftJoin('categories', 'categories.id', '=', 'products.category_id');
        ! $brand ?: $query->leftJoin('brands', 'brands.id', '=', 'products.brand_id');

        if($color){
            $query
            ->leftJoin('colorables', 'colorables.colorable_id', '=', 'products.id')
            ->leftJoin('colors', 'colorables.color_id', '=', 'colors.id')
            ->where('colorables.colorable_type', get_class($this));     # consider polymorphic relation with color
        }
            

        $query
        ->leftJoin('add_params', 'categories.id', '=', 'add_params.category_id')
        ->leftJoin('add_values', function($join)
        {
            $join->on('add_values.product_id', '=', 'products.id')
                 ->on('add_values.param_id', '=', 'add_params.id');
        })
        ->where(function($query) use (&$category, &$color, &$brand)
        {

            ! $category ?: $query->where('categories.alias', $category);

            empty($color) ?: $query->where(function($query) use ($color)
            {                
                $i = 0;
                foreach ($color as &$value) {
                    $i ? $query->orWhere('colors.alias', $value) : $query->where('colors.alias', $value);
                    $i++;
                }
            });

            empty($brand) ?: $query->where(function($query) use ($brand)
            {                
                $i = 0;
                foreach ($brand as &$value) {
                    $i ? $query->orWhere('brands.alias', $value) : $query->where('brands.alias', $value);
                    $i++;
                }
            });

            ! (Input::has('price-from') && Input::has('price-to')) ?: $query->whereBetween('price', [Input::get('price-from'), Input::get('price-to')]);

            ! Input::has('q') ?: $query->where(function($query)
            {
              $query->where('products.title', 'LIKE', '%'.Input::get('q').'%');
              $query->orWhere('products.description', 'LIKE', '%'.Input::get('q').'%');
            });

            empty(Input::except('price-from', 'price-to', 'color', 'brand_id', 'q')) ?: $query->where(function($query)
            {              
              $i = 0;
              foreach (Input::except('price-from', 'price-to', 'color', 'brand_id', 'q') as $key => $value) {
                  if (is_array($value))
                  {   
                      $i ? $query->orWhere('add_params.alias', $key) : $query->where('add_params.alias', $key);
                      $query->whereIn('param_value', array_keys($value));
                      $i++;
                  }
              }
            });
        })
        ->select('products.*')
        ->groupBy('products.id');
        
        return $query->get()->toArray();
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