<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('product_name');
            $table->string('model_name');
            $table->string('serial_no')->nullable();

            $table->integer('payment_mode_id')->unsigned()->index();
            $table->foreign('payment_mode_id')->references('id')->on('payment_modes')->onDelete('cascade');

            $table->string('desc');

            $table->timestamps();
        });


        //      inventories hasMany stocks

        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('inventory_id')->nullable()->unsigned();
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');

            $table->integer('quantity');
            $table->integer('available');
            $table->dateTime('refill_date');

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
        Schema::drop('inventories');

    }
}
