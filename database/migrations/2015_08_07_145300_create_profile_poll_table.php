<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilePollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_poll', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->integer('poll_id')->unsigned()->index();
            $table->foreign('poll_id')->references('id')->on('polls')->onDelete('cascade');

            $table->integer('option_id')->unsigned()->index();
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');

            $table->integer('option')->unsigned()->index();

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
        Schema::drop('profile_poll');
    }
}
