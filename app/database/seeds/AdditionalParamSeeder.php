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
        	['alias' => 'foot_size', 'title' => 'Foot Size', 'category_id' => 1],
        	['alias' => 'head_size', 'title' => 'Head Size', 'category_id' => 2],
        	['alias' => 'arm_size', 'title' => 'Arm Size', 'category_id' => 1]
        	];

        foreach ($additionalParams as $additionalParam) {
            DB::table('add_params')->insert($additionalParam);
        }
	}
}
