<?php

class ActivityTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('activity_types')->delete();

        $types = [
            [
                'title'      => 'Король',
                'alias'      => 'king',
            ],
            [
                'title'      => 'Шут',
                'alias'      => 'joker',
            ],
        ];

        DB::table('activity_types')->insert( $types );

        /**
         * Attach roles
         */
        $profy = Role::where('name', 'professional')->firstOrFail();
        $king = ActivityType::where('alias', 'king')->firstOrFail();
        $joker = ActivityType::where('alias', 'joker')->firstOrFail();
        $king->role()->attach($profy);
        $joker->role()->attach($profy);
    }

}
