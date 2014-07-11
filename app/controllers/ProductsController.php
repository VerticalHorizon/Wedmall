<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		$category = Route::input('category');

		$products = Product::search(['category' => $category]);		# ->get() already called in model

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
		->with('brands', $brands)
		->with('colors', $colors)
		->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::find($id);

		return View::make('products.show')
		->with('product', $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}