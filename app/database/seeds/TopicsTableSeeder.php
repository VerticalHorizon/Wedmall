<?php

class TopicsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('topics')->delete();

        $topics = [
                ['title' => 'Платья на свадьбу', 'alias' => 'dresses', 'description' => 'only for Austronauts',  'parent_id' => NULL],
                ['title' => 'Свадебные аксессуары', 'alias' => 'accessuary', 'description' => 'only for Aliens', 'parent_id' => 1],
                ['title' => 'Свадебная обувь', 'alias' => 'boots', 'description' => 'only for Aliens', 'parent_id' => NULL],
                ['title' => 'Флористика', 'alias' => 'flor', 'description' => 'only for Aliens', 'parent_id' => 3],
            ];

        DB::table('topics')->insert($topics);
	}

}
