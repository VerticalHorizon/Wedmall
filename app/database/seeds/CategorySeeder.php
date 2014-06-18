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
                ['title' => 'For Austronauts', 'description' => 'only for Austronauts',  'parent_id' => NULL],
                ['title' => 'For Aliens', 'description' => 'only for Aliens', 'parent_id' => 1],
            ];

        DB::table('categories')->insert($categories);
    }
}
