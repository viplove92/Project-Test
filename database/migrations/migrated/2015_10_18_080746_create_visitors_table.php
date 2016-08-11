<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('first_name');
            $table->string('last_name');

            $table->integer('mobile_id')->unsigned()->index();
            $table->foreign('mobile_id')->references('id')->on('mobiles');

//            to meet
            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->string('purpose');

            $table->integer('wing_id')->unsigned()->nullable()->index();
            $table->foreign('wing_id')->references('id')->on('wings');

            $table->integer('floor_id')->unsigned()->nullable()->index();
            $table->foreign('floor_id')->references('id')->on('floors');

            $table->integer('block_id')->unsigned()->nullable()->index();
            $table->foreign('block_id')->references('id')->on('blocks');

            $table->date('punch_in');
            $table->date('punch_out');

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
        Schema::drop('visitors');
    }
}
