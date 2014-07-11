<?php

class ActivityTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('activity_types')->delete();

        $types = [
            [
                'title'      => 'Фотограф',
                'alias'      => 'photographer',
            ],
            [
                'title'      => 'Оператор',
                'alias'      => 'operator',
            ],
        ];

        DB::table('activity_types')->insert( $types );

        /**
         * Attach roles
         */
        $profy = Role::where('name', 'professional')->firstOrFail();

        $profy->activityTypes()->saveMany([
            ActivityType::where('alias', 'photographer')->firstOrFail(),
            ActivityType::where('alias', 'operator')->firstOrFail(),
        ]);
    }

}