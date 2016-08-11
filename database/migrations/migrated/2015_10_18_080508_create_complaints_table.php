<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsOneTable extends Migration
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

            $table->string('title');
            $table->string('desc');
            $table->boolean('isRead');
            $table->boolean('isClosed');

//            closed By
            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->string('closedRemark');
            $table->string('photo_url');

            $table->integer('complaint_areas_id')->unsigned()->index();
            $table->foreign('complaint_areas_id')->references('id')->on('complaint_areas');

            $table->integer('problem_type_id')->nullable()->unsigned()->index();
            $table->foreign('problem_type_id')->references('id')->on('complaint_problem_types');

            $table->timestamps();
        });

        Schema::create('complaint_comments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('complaint_id')->unsigned()->index();
            $table->foreign('complaint_id')->references('id')->on('complaints')->onDelete('cascade');

            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->string('body');
            $table->integer('likes');


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
        Schema::drop('complaint_comments');
    }
}
