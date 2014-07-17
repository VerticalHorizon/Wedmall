<?php

class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
                ['title' => 'For Austronauts', 'alias' => Slug::make('For Austronauts'), 'description' => 'only for Austronauts',  'parent_id' => NULL],
                ['title' => 'For Aliens', 'alias' => Slug::make('For Aliens'), 'description' => 'only for Aliens', 'parent_id' => 1],
                ['title' => 'For Homeless', 'alias' => Slug::make('For Homeless'), 'description' => 'hm hmm', 'parent_id' => NULL],
            ];

        DB::table('categories')->insert($categories);
    }
}
