<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

//          Created by
            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->string('subject');
            $table->string('type');
            $table->string('area');
            $table->string('desc');
            $table->string('closedRemark');
            $table->string('photo_url');

            $table->boolean('isRead');
            $table->dateTime('readDate');
            $table->boolean('isProcessing');
            $table->dateTime('processingDate');
            $table->boolean('isClosed');
            $table->dateTime('closeDate');

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
        Schema::drop('complaints');
    }
}
