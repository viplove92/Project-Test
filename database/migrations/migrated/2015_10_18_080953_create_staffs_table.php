<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('first_name');
            $table->string('last_name');

            $table->dateTime('dob'); // date of birth

            $table->string('area');
            $table->string('street');
            $table->string('landmark');

            $table->integer('staff_type_id')->unsigned()->nullable()->index();
            $table->foreign('staff_type_id')->references('id')->on('staff_types');

            $table->integer('city_id')->unsigned()->nullable()->index();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->integer('state_id')->unsigned()->nullable()->index();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('pin_id')->unsigned()->nullable()->index();
            $table->foreign('pin_id')->references('id')->on('pincodes');

            $table->integer('mobile_id')->unsigned()->nullable()->index();
            $table->foreign('mobile_id')->references('id')->on('mobiles');

            $table->integer('doc_id')->unsigned()->nullable()->index();
            $table->foreign('doc_id')->references('id')->on('doc_types');

            $table->string('id_number');

            $table->dateTime('doj'); // date of joining

            $table->string('photo_url');

            $table->string('lat');  // lattitute
            $table->string('lng'); // longitude

            $table->timestamps();
        });



        //      Staff hasMany Salary

        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('staff_id')->unsigned();
            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade');

            $table->dateTime('dos'); // date of salary
            $table->integer('salary'); // total salary outstanding
            $table->integer('paid_salary'); // paid salary
            $table->integer('remain'); // calculation | salary - paid_salary = remain
            $table->dateTime('paid_date'); // salary paid date

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
        Schema::drop('staffs');
        Schema::drop('salaries');
    }
}
