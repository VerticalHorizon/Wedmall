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

		$this->call('AdditionalParamSeeder');
		$this->call('AdditionalValueSeeder');
		$this->call('CategorySeeder');
		$this->call('ProductSeeder');
	}

}
