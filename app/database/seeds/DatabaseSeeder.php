<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UsersRolesTableSeeder');

		$this->call('PermissionsTableSeeder');

		$this->call('AdditionalParamSeeder');

		$this->call('AdditionalValueSeeder');

		$this->call('CategorySeeder');

		$this->call('ProductSeeder');

		$this->call('SliderTableSeeder');

		$this->call('ColorsTableSeeder');

		$this->call('BrandsTableSeeder');

		$this->call('ActivityTypesTableSeeder');

		//$this->call('TopicsTableSeeder');

		$this->call('ArticlesTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
