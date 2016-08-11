<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('classified_id')->unsigned()->index();
            $table->foreign('classified_id')->references('id')->on('classifieds')->onDelete('cascade');

            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->string('company_name');
            $table->string('company_address');
            $table->string('area');
            $table->string('street');
            $table->string('landmark');

            $table->integer('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->integer('state_id')->unsigned()->index();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('pin_id')->unsigned()->index();
            $table->foreign('pin_id')->references('id')->on('pincodes');

            $table->integer('mobile_id')->unsigned()->index();
            $table->foreign('mobile_id')->references('id')->on('mobiles');

            $table->string('official_email');
            $table->boolean('email_confirmed');

            $table->string('website');

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
        Schema::drop('vendors');
    }
}
