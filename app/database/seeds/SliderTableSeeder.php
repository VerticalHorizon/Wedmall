<?php

// Composer: "fzaninotto/faker": "v1.3.0"

class SliderTableSeeder extends Seeder {

	public function run()
	{
		$slides = [
            ['description' => ' la la la', 'photo' =>  'photo1', 'link' => 'http://google.by'],
            ['description' => 'ha ha ha ha', 'photo' =>  'photo2', 'link' => 'http://tut.by/'],
		];

        foreach ($slides as $slide) {
            DB::table('slider')->insert($slide);
        }

	}

}