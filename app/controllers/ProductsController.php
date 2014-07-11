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
		$category = Route::input('alias');

		$products = Product::search(['category' => $category]);		# ->get() already called in model

		$brands = Brand::all();

		$colors = DB::table('colors')->get();

		if($category)
		{
			$current_category = Category::where('alias', $category)->firstOrFail();

			$attributes = Attribute::with('defaultValue')->leftJoin('categories_attributes', 'attributes.id', '=', 'categories_attributes.attribute_id')
			->where('categories_attributes.category_id', $current_category->id)
			->select('attributes.*')
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