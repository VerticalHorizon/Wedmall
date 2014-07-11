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
                        ['alias' => 'foot_size', 'title' => 'Foot Size'],
                        ['alias' => 'head_size', 'title' => 'Head Size'],
                        ['alias' => 'arm_size', 'title' => 'Arm Size'],
                ];

                DB::table('attributes')->insert($attributes);

                $category = Category::find(1);
                $category->parameters()->attach( Attribute::where('alias', 'foot_size')->firstOrFail() );
                $category->parameters()->attach( Attribute::where('alias', 'head_size')->firstOrFail() );
                $category2 = Category::find(2);
                $category2->parameters()->attach( Attribute::where('alias', 'arm_size')->firstOrFail() );
        }
}
