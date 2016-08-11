<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysEmailLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_email_logs', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('userid');
            $table->string('sender', 200);
            $table->text('email');
            $table->text('subject');
            $table->text('message');
            $table->dateTime('date');
            $table->integer('iid')->default('0');
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
        Schema::drop('sys_email_logs');
    }
}
