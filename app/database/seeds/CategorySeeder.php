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
            ['title' => 'For Austronauts', 'description' => '']
            ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
