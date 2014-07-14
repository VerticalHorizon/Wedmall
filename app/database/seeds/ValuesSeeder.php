<?php

class ValuesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('values')->delete();

        $product = Product::findOrFail(1);

        $value = Value::create([]);
        $value->param_value = 3;
        $value->attribute()->associate( Attribute::where('alias', 'foot_size')->firstOrFail() );
        $value->value()->associate( DefaultValue::findOrFail(1) );
        $value->product()->associate( $product );
        $value->save();

        $value = new Value([]);
        $value->param_value = 1;
        $value->attribute()->associate( Attribute::where('alias', 'arm_size')->firstOrFail() );
        $value->product()->associate( $product );
        $value->save();

        $value = Value::create([]);
        $value->param_value = 2;
        $value->attribute()->associate( Attribute::where('alias', 'head_size')->firstOrFail() );
        $value->product()->associate( $product );
        $value->save();

        $product = Product::findOrFail(2);

        $value = Value::create([]);
        $value->attribute()->associate( Attribute::where('alias', 'foot_size')->firstOrFail() );
        $value->param_value = 2;
        $value->product()->associate( $product );
        $value->save();
    }

}
