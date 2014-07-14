<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('values', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('param_value')->unsigned();

            $table->integer('product_id')->unsigned();
            $table->integer('param_id')->unsigned();
        });

        // Schema::table('values', function(Blueprint $table) {
        //     $table->foreign('param_id')->references('id')->on('add_params');
        //     $table->foreign('product_id')->references('id')->on('products');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('values', function(Blueprint $table) {
        //     $table->dropForeign('add_values_product_id_foreign');
        //     $table->dropForeign('add_values_param_id_foreign');
        // });

        Schema::drop('values');
    }

}
