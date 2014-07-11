<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefaultValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('default_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
		});

        // Creates the attributes_defaults (Many-to-Many relation) table
        Schema::create('attributes_defaults', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('attribute_id')->unsigned();
            $table->integer('value_id')->unsigned();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('default_values');
		Schema::drop('attributes_defaults');
	}

}
