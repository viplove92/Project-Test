<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('display_name');
            $table->string('brand_name')->nullable();
            $table->string('model_name')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('desc');
            $table->date('purchase_date');

            $table->integer('qty')->default('0');
            $table->decimal('price', 18, 2)->default('0.00');
            $table->decimal('sub_total', 18, 2)->default('0.00');
            $table->decimal('tax', 18, 2)->default('0.00');
            $table->decimal('total', 18, 2)->default('0.00');

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
        Schema::drop('assets');
    }
}
