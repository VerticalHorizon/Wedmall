<?php

class CategorySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('categories')->delete();

        Category::create(array('title' => 'Category1', 'description' => '', 'parent_id' => 0));
	}

}
