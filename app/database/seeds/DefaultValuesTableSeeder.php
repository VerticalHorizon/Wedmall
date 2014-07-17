<?php

class DefaultValuesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('default_values')->delete();

        $defaultValues = [
            ['title' => 'Neylon'],
            ['title' => 'Cotton'],
            ['title' => 'Silk'],
            ['title' => 'Dust'],
            ['title' => '1'],
            ['title' => '2'],
        ];

        DB::table('default_values')->insert($defaultValues);

        $attribute = Attribute::findOrFail(1);
        $attribute->defaults()->attach( DefaultValue::findOrFail(1) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(2) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(3) );

        $attribute = Attribute::findOrFail(2);
        $attribute->defaults()->attach( DefaultValue::findOrFail(4) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(5) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(3) );

        $attribute = Attribute::findOrFail(3);
        $attribute->defaults()->attach( DefaultValue::findOrFail(5) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(1) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(2) );

        $attribute = Attribute::findOrFail(4);
        $attribute->defaults()->attach( DefaultValue::findOrFail(2) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(3) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(4) );

        $attribute = Attribute::findOrFail(5);
        $attribute->defaults()->attach( DefaultValue::findOrFail(5) );
        $attribute->defaults()->attach( DefaultValue::findOrFail(6) );
	}

}
