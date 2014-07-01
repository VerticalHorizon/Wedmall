<?php

class ColorsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('colors')->delete();

        $colors = [
                ['alias' => 'red'],
                ['alias' => 'pink'],
                ['alias' => 'yellow'],
                ['alias' => 'green'],
                ['alias' => 'turquoise'],
                ['alias' => 'blue'],
                ['alias' => 'plum'],
                ['alias' => 'amethyst'],
                ['alias' => 'rose'],
                ['alias' => 'brown'],
                ['alias' => 'white'],
                ['alias' => 'gray'],
                ['alias' => 'black'],
            ];

        DB::table('colors')->insert($colors);

        $product = Product::find(1);
        $product->attachColor( Color::find(8) );
	}
}