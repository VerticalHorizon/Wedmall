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

		// $products = Product::withParameters()
		// ->get()
		// ->toArray();

		//return View::make('home.index')->with('products', '<pre>'.print_r($products, true).'</pre>');
		return View::make('home.index')->with('categories', $categories)->with('slides', $slides);
	}

}
