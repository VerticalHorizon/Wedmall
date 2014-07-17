<?php

class AttributesSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                DB::table('attributes')->delete();

                $attributes = [
                        ['title' => 'Максимальная нагрузка', 'alias' => Slug::make('Максимальная нагрузка')],
                        ['title' => 'Материал каркаса', 'alias' => Slug::make('Материал каркаса')],
                        ['title' => 'Материал обивки', 'alias' => Slug::make('Материал обивки')],
                        ['title' => 'Элементы конструкции', 'alias' => Slug::make('Элементы конструкции')],
                        ['title' => 'Высота', 'alias' => Slug::make('Высота')],
                ];

                DB::table('attributes')->insert($attributes);

                $category = Category::findOrFail(1);
                $category->attribute()->attach( Attribute::where('alias', Slug::make('Максимальная нагрузка'))->firstOrFail() );
                $category->attribute()->attach( Attribute::where('alias', Slug::make('Материал каркаса'))->firstOrFail() );
                $category->attribute()->attach( Attribute::where('alias', Slug::make('Материал обивки'))->firstOrFail() );
                $category = Category::findOrFail(2);
                $category->attribute()->attach( Attribute::where('alias', Slug::make('Элементы конструкции'))->firstOrFail() );
                $category->attribute()->attach( Attribute::where('alias', Slug::make('Высота'))->firstOrFail() );
        }
}
