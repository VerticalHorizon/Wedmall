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
            ['title' => 'Suit', 'alias' => Slug::make('Suit'), 'description' => ' la la la', 'color_id' => 2, 'price' => 80.0, 'photos' =>  '', 'category_id' => 1, 'pageviews' => 10, 'likes' => 8, 'purchase_terms_id' => 0, 'brand_id' => 0],
            ['title' => 'Hat', 'alias' => Slug::make('Hat'), 'description' => 'ha ha hah ha', 'color_id' => 11, 'price' => 120.0, 'photos' =>  '', 'category_id' => 1, 'pageviews' => 10, 'likes' => 10, 'purchase_terms_id' => 0, 'brand_id' => 0],
            ['title' => 'Black', 'alias' => Slug::make('Black'), 'description' => 'Das gsdfga aedfasddf eds  s', 'color_id' => 8, 'price' => 180.0, 'photos' =>  '', 'category_id' => 2, 'pageviews' => 40, 'likes' => 15, 'purchase_terms_id' => 0, 'brand_id' => 0],
        ];

        DB::table('products')->insert($products);
    }

}
