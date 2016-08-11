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

            $table->string('title');
            $table->string('model_name');
            $table->string('serial_no')->nullable();

            $table->integer('qty')->default('0');
            $table->decimal('price', 18, 2)->default('0.00');
            $table->decimal('sub_total', 18, 2)->default('0.00');
            $table->decimal('tax', 18, 2)->default('0.00');
            $table->decimal('total', 18, 2)->default('0.00');

            $table->string('desc');

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
