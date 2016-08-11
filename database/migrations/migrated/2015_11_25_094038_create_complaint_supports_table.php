<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_supports', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->integer('complaint_id')->unsigned()->index();
            $table->foreign('complaint_id')->references('id')->on('complaints')->onDelete('cascade');

            $table->boolean('up');
            $table->boolean('down');

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
        Schema::drop('complaint_supports');
    }
}
