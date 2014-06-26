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

	public function getByCategory($category)
	{

		$products = Product::search(['category' => $category]);		# ->get() already called in model

		$current_category = Category::where('alias', $category)->firstOrFail();

		$categories = Category::with('children')->where('parent_id', NULL)->get();

		$brands = Brand::all();

		$colors = DB::table('colors')->get();

		$attributes = AdditionalParam::leftJoin('categories', 'categories.id', '=', 'add_params.category_id')
		->where('categories.alias', $category)
		->select('add_params.*')
		->get()
		->toArray();

		$attributes = array_combine(array_column($attributes, 'alias'), array_values($attributes));

		return View::make('products.index')
		->with('current_category', $current_category)
		->with('categories', $categories)
		->with('brands', $brands)
		->with('colors', $colors)
		->with('attributes', $attributes)
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
