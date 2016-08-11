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
            $table->string('brand_name');
            $table->string('model_name');
            $table->string('serial_no');
            $table->string('desc');
            $table->dateTime('purchase_date');

            $table->timestamps();
        });

        Schema::create('servicings', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('asset_id')->unsigned()->index();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');

            $table->integer('vendor_id')->unsigned()->index();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');

            $table->integer('problem_type_id')->nullable()->unsigned()->index();
            $table->foreign('problem_type_id')->references('id')->on('servicing_problem_types');

            $table->dateTime('service_date');
            $table->integer('service_charge');

            $table->integer('payment_mode_id')->unsigned()->index();
            $table->foreign('payment_mode_id')->references('id')->on('payment_modes');

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
        Schema::drop('assets');
        Schema::drop('servicings');
    }
}
