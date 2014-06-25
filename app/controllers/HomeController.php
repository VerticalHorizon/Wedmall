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
/*		$products = Product::with('category.parameters.paramvalues')
		->get()
		->filter(function($parameter) {
			dd($parameter->category->parameters);
		})
		->toArray();	// impossible to do diamond select with Eloquent*/
		
		//$products = Product::withParameters()->get()->toArray();

		$categories = Category::with('children')->where('parent_id', NULL)->get();
		$slides = Slider::all();

		return View::make('home.index')->with('categories', $categories)->with('slides', $slides);
	}

	public function getByCategory($alias)
	{

		$products = Product::search($alias);		# ->get() already called in model

		$current_category = Category::where('alias', $alias)->firstOrFail();

		$categories = Category::with('children')->where('parent_id', NULL)->get();

		$attributes = AdditionalParam::leftJoin('categories', 'categories.id', '=', 'add_params.category_id')
		->where('categories.alias', $alias)
		->select('add_params.*')
		->get()
		->toArray();

		$attributes = array_combine(array_column($attributes, 'alias'), array_values($attributes));

		return View::make('products.index')
		->with('current_category', $current_category)
		->with('attributes', $attributes)
		->with('categories', $categories)
		->with('products', $products);
	}

}
