<?php

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $products = [
            ['title' => 'Suit', 'description' => ' la la la', 'color' => 0, 'price' => 10.0, 'photos' =>  '', 'category_id' => 1, 
                'pageviews' => 10, 'likes' => 10, 'purchase_terms_id' => 0, 'brand_id' => 0],
            ['title' => 'Hat', 'description' => 'ha ha ha ha', 'color' => 13, 'price' => 11.0, 'photos' =>  '', 'category_id' => 1, 
                'pageviews' => 10, 'likes' => 10, 'purchase_terms_id' => 0, 'brand_id' => 0]
            ];

        DB::table('products')->insert($products);
    }

}
