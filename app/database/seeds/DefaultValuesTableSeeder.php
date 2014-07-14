<?php

class DefaultValuesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('default_values')->delete();

        $defaultValues = [
            ['title' => 'Neylon'],
            ['title' => 'Cotton'],
            ['title' => 'Silk'],
            ['title' => 'Dust'],
            ['title' => '1'],
            ['title' => '2'],
        ];

        DB::table('default_values')->insert($defaultValues);
	}

}
