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
            ['value' => '13', 'product_id' => 1, 'param_id' => 1],
            ['value' => 'hobotnia', 'product_id' => 2, 'param_id' => 2],
            ['value' => 'Hello World', 'product_id' => 1, 'param_id' => 1]
            ];

        foreach ($additionalValues as $additionalValue) {
            DB::table('add_values')->insert($additionalValue);
        }
    }

}
