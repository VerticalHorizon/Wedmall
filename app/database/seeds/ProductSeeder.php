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
            ['title' => 'Suit', 'alias' => Slug::make('Suit'),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada ante eget facilisis rutrum. Quisque non elementum ligula, in aliquam turpis. Vivamus volutpat consequat justo quis hendrerit. Sed at odio ut neque gravida dapibus nec ut nibh. Morbi sit amet dapibus metus, in rhoncus libero. Integer dui dolor, tempor vitae odio sed, vehicula lobortis nulla. Mauris bibendum quam non velit dapibus adipiscing. Phasellus ultrices porttitor odio ac porttitor. Duis consequat neque vitae ligula ullamcorper, ut convallis purus ultricies. Proin eu tellus suscipit, scelerisque turpis a, iaculis nibh. Cras eget faucibus leo, ac congue tortor.',
            'price' => 80.0, 'photos' =>  '', 'category_id' => 1, 'pageviews' => 10, 'likes' => 8, 'purchase_terms_id' => 0, 'brand_id' => 0, 'user_id' => 4],
            ['title' => 'Hat', 'alias' => Slug::make('Hat'), 'description' => 'ha ha hah ha', 'price' => 120.0, 'photos' =>  '', 'category_id' => 1, 'pageviews' => 10, 'likes' => 10, 'purchase_terms_id' => 0, 'brand_id' => 0, 'user_id' => 4],
            ['title' => 'Black', 'alias' => Slug::make('Black'), 'description' => 'Das gsdfga aedfasddf eds  s', 'price' => 180.0, 'photos' =>  '', 'category_id' => 2, 'pageviews' => 40, 'likes' => 15, 'purchase_terms_id' => 0, 'brand_id' => 0, 'user_id' => 4],
        ];

        DB::table('products')->insert($products);
    }

}
