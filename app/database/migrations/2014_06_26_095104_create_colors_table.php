<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('alias');
			$table->integer('hex')->nullable();
		});

        // Many-to-Many Polymorphic relation
        Schema::create('colorables', function($table)
        {
            $table->integer('color_id')->unsigned();
            $table->morphs('colorable');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colorables');
		Schema::drop('colors');
	}

}
