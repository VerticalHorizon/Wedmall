<?php

class ProductSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('products')->delete();

        Category::create(array('title' => 'Product1', 'description' => ' la la la', 'color' => 0, 'user_id' => 1, 'category_id' => 1, 'pageviews' => 10, 'likes' => 10));
	}

}
