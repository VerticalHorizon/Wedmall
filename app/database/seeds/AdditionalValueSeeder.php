<?php

class AdditionalValueSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('add_values')->delete();

        $additionalValues = [
            ['param_value' => '13', 'product_id' => 1, 'param_id' => 1],
            ['param_value' => 'hobotnia', 'product_id' => 2, 'param_id' => 2],
            ['param_value' => 'Hello World', 'product_id' => 1, 'param_id' => 1],
            ['param_value' => 'Nothing else matters', 'product_id' => 2, 'param_id' => 1]
            ];

        DB::table('add_values')->insert($additionalValues);
    }

}
