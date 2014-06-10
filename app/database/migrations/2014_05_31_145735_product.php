<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('color');
            $table->text('photos');
            
            $table->integer('pageviews')->unsigned();
            $table->integer('likes')->unsigned();
            $table->integer('popularity')->unsigned();

            $table->integer('purchase_terms_id')->unsigned();       // maybe enum
            $table->integer('brand_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->softDeletes();
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
        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('products_user_id_foreign');
            $table->dropForeign('products_category_id_foreign');
        });

        Schema::drop('products');
    }

}
