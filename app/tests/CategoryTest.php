<?php

class CategoryTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testSavingCategory()
	{
		$category = new Category();
	    $category->title = 'Content';
	    $category->alias = 'content';
	    $this->assertTrue($category->save());
	}

	public function testDeletingCategory()
	{
		$category = Category::where('alias', 'content')->firstOrFail();
	    $this->assertTrue($category->delete());
	}

}
