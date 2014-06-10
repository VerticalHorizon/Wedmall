<?php

class AdditionalValueSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('add_params')->delete();

        AdditionalParams::create(array('value' => '13', 'product_id' => 1, 'param_id' => 1));
        AdditionalParams::create(array('value' => 'hobotnia', 'product_id' => 2, 'param_id' => 2));
        AdditionalParams::create(array('value' => 'Hello World', 'product_id' => 1, 'param_id' => 1));
	}

}
