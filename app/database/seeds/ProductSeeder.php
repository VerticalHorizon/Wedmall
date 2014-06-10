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

        Category::create(array('title' => 'Suit', 'description' => ' la la la', 'color' => 0, 'user_id' => 1, 'category_id' => 1, 'pageviews' => 10, 'likes' => 10));
        Category::create(array('title' => 'Hat', 'description' => 'ha ha ha ha', 'color' => 13, 'user_id' => 1, 'category_id' => 1, 'pageviews' => 10, 'likes' => 10));
	}

}
