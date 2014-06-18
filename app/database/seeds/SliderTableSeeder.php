<?php

class SliderTableSeeder extends Seeder {

    public function run()
    {
        DB::table('slider')->delete();

        $slides = [
            ['description' => ' la la la', 'photo' =>  'euTh4Sp0h1UAedzX09FcoHySkwKk1wmY.jpg', 'link' => 'http://google.by'],
            ['description' => 'ha ha ha ha', 'photo' =>  'p0YSBcVXnFCUTwVCeFjFyAUKmF4Kva9M.jpg', 'link' => 'http://tut.by/'],
        ];

        DB::table('slider')->insert($slides);
    }

}