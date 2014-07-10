<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title');
            $table->string('alias');
            $table->text('description');
            $table->text('photos');     // photos in JSON
            $table->integer('popularity')->unsigned();

            $table->integer('parent_id')->unsigned()->nullable();

            $table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}
