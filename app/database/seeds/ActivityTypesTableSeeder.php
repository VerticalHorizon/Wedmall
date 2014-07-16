<?php

class ActivityTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('activity_types')->delete();

        $types = [
            [
                'title'      => 'Фотограф',
                'alias'      => Slug::make('Фотограф'),
            ],
            [
                'title'      => 'Оператор',
                'alias'      => Slug::make('Оператор'),
            ],
            [
                'title'      => 'Студия декора',
                'alias'      => Slug::make('Студия декора'),
            ],
            [
                'title'      => 'Ресторан',
                'alias'      => Slug::make('Ресторан'),
            ],
        ];

        DB::table('activity_types')->insert( $types );

        /**
         * Attach roles
         */
        $profy = Role::where('name', 'professional')->firstOrFail();

        $profy->activityTypes()->saveMany([
            ActivityType::where('alias', Slug::make('Фотограф'))->firstOrFail(),
            ActivityType::where('alias', Slug::make('Оператор'))->firstOrFail(),
        ]);

        $profy = Role::where('name', 'organization')->firstOrFail();

        $profy->activityTypes()->saveMany([
            ActivityType::where('alias', Slug::make('Студия декора'))->firstOrFail(),
        ]);
    }

}