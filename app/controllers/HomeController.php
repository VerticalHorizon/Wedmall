<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@welcome');
	|
	*/

	public function Welcome()
	{
		$colors = DB::table('colors')->get();

		$categories = Category::with('children')->where('parent_id', NULL)->get();

		$slides = Slider::all();

		return View::make('home.index')
		->with('colors', $colors)
		->with('categories', $categories)
		->with('slides', $slides);
	}

	public function Products()
	{
		$color = Route::input('color');
		$category = Route::input('category');

		$products = Product::search(['category' => $category, 'color' => [$color] ]);		# ->get() already called in model

		$categories = Category::with('children')->where('parent_id', NULL)->get();

		$brands = Brand::all();

		$colors = DB::table('colors')->get();

		if($category)
		{
			$current_category = Category::where('alias', $category)->firstOrFail();

			$attributes = AdditionalParam::leftJoin('categories', 'categories.id', '=', 'add_params.category_id')
			->where('categories.alias', $category)
			->select('add_params.*')
			->get()
			->toArray();

			$attributes = array_combine(array_column($attributes, 'alias'), array_values($attributes));
		}
		else
		{
			$current_category = NULL;
			$attributes = NULL;
		}

		return View::make('products.index')
		->with('current_category', $current_category)
		->with('attributes', $attributes)
		->with('categories', $categories)
		->with('brands', $brands)
		->with('colors', $colors)
		->with('products', $products);
	}

	public function getByColor($color)
	{

		$products = Product::search(['color' => $color]);		# ->get() already called in model

		return View::make('products.index')
		->with('categories', $categories)
		->with('brands', $brands)
		->with('colors', $colors)
		->with('attributes', $attributes)
		->with('products', $products);
	}

}
