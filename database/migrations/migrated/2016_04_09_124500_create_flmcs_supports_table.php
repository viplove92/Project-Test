<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlmcsSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flmcs_supports', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('tid', 20);
            $table->integer('aid');
            $table->integer('fid');
            $table->string('domain', 100);
            $table->string('tvid', 30);
            $table->string('tvpass', 30);
            $table->string('subject', 200);
            $table->mediumText('message');
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
        Schema::drop('flmcs_supports');
    }
}
