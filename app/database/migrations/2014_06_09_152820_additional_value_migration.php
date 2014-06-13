<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalValueMigration extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('add_values', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('param_value');

            $table->integer('product_id')->unsigned();
            $table->integer('param_id')->unsigned();
        });

        // Schema::table('add_values', function(Blueprint $table) {
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
        // Schema::table('add_values', function(Blueprint $table) {
        //     $table->dropForeign('add_values_product_id_foreign');
        //     $table->dropForeign('add_values_param_id_foreign');
        // });

        Schema::drop('add_values');
    }

}
