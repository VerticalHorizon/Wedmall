<?php

class BrandsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('brands')->delete();

        $brands = [
                ['title' => 'Made in China', 'alias' => 'made-in-china'],
                ['title' => 'Footmade in Vietnam', 'alias' => 'footmade-in-vietnam'],
                ['title' => 'Coca Cola', 'alias' => 'coca-cola'],
                ['title' => 'Mcdonald\'s', 'alias' => 'mcdonald\'s'],
            ];

        DB::table('brands')->insert($brands);
	}

}