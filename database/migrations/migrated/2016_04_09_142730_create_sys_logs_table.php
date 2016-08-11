<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_logs', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->dateTime('date')->default('0000-00-00 00:00:00');
            $table->string('type', 50);
            $table->text('description');
            $table->integer('userid');
            $table->text('ip');
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
        Schema::drop('sys_logs');
    }
}
