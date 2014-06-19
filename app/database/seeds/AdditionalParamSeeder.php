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

        $additionalParams = [
        	['alias' => 'foot_size', 'title' => 'Foot Size', 'default' => '["first","second","third"]', 'category_id' => 1],
        	['alias' => 'head_size', 'title' => 'Head Size', 'default' => '["first","second","third"]', 'category_id' => 2],
        	['alias' => 'arm_size', 'title' => 'Arm Size', 'default' => '["first","second","third"]', 'category_id' => 1]
        	];

        DB::table('add_params')->insert($additionalParams);
	}
}
