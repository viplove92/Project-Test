<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysEmailconfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_emailconfig', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('method', 50);
            $table->string('host', 100);
            $table->string('username', 100);
            $table->string('password', 200);
            $table->string('apikey', 200);
            $table->string('port', 10);
            $table->string('secure', 20);
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
        Schema::drop('sys_emailconfig');
    }
}
