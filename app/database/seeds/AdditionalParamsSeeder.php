<?php

class AdditionalParamsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('add_params')->delete();

        AdditionalParams::create(array('title' => 'Foot Size', 'category_id' => 1));
	}

}
