<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysTtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_tt', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('title', 200);
            $table->string('start', 50)->default('0');
            $table->string('end', 50)->default('0');
            $table->enum('allday', ['true', 'false'])->default('false');
            $table->string('url', 200);
            $table->integer('cid');
            $table->integer('tid');
            $table->integer('uid');
            $table->integer('pid');
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
        Schema::drop('sys_tt');
    }
}
