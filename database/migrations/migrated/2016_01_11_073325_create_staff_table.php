<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
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

            $table->string('staff_name');
            $table->string('alias');

            $table->integer('staff_role_id')->unsigned()->index();
            $table->foreign('staff_role_id')->references('id')->on('staff_roles')->onDelete('cascade');

            $table->integer('gender_id')->unsigned()->index();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->date('dob');
            $table->date('expiry_card');
            $table->string('mobile_no');

            $table->integer('nationality_id')->unsigned()->index();
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');

            $table->string('address');
            $table->string('first_ref');
            $table->string('second_ref');
            $table->string('other');

            $table->string('attachment_url');
            $table->string('photo_url');

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
    }
}
