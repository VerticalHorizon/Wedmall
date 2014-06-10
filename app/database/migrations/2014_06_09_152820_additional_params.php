<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalParams extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('add_params', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('popularity')->unsigned();
			
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('add_params', function(Blueprint $table) {
            $table->dropForeign('add_params_category_id_foreign');
        });
		Schema::drop('add_params');
	}

}
