<?php

class ValuesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('values')->delete();

        $additionalValues = [
            ['param_value' => '0', 'product_id' => 1, 'param_id' => 1],
            ['param_value' => '0', 'product_id' => 1, 'param_id' => 3],
            ['param_value' => '1', 'product_id' => 2, 'param_id' => 1],
            ['param_value' => '2', 'product_id' => 2, 'param_id' => 1],
            ['param_value' => '2', 'product_id' => 3, 'param_id' => 2],
        ];

        DB::table('values')->insert($additionalValues);
    }

}
