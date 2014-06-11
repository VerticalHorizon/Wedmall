<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryMigration extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('photos');
            $table->integer('popularity')->unsigned();

            $table->integer('parent_id')->unsigned();
        });

        // Schema::table('categories', function(Blueprint $table) {
        //     $table->foreign('parent_id')->references('id')->on('categories');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('categories', function(Blueprint $table) {
        //     $table->dropForeign('categories_parent_id_foreign');
        // });
        Schema::drop('categories');
    }

}
