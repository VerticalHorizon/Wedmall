<?php

class AdditionalParamSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('add_params')->delete();

        AdditionalParams::create(array('alias' => 'foot_size', 'title' => 'Foot Size', 'category_id' => 1));
        AdditionalParams::create(array('alias' => 'head_size', 'title' => 'Head Size', 'category_id' => 2));
        AdditionalParams::create(array('alias' => 'arm_size', 'title' => 'Arm Size', 'category_id' => 1));
	}

}
