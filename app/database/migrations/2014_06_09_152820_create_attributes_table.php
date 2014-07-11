<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('attributes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('alias');
            $table->string('title');
        });

        // Creates the categories_attributes (Many-to-Many relation) table
        Schema::create('categories_attributes', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('attribute_id')->unsigned();
            $table->integer('category_id')->unsigned();
        });

        // Schema::table('attributes', function(Blueprint $table) {
        //     $table->foreign('category_id')->references('id')->on('categories');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('attributes', function(Blueprint $table) {
        //     $table->dropForeign('add_params_category_id_foreign');
        // });

        Schema::drop('attributes');
        Schema::drop('categories_attributes');
    }

}
