<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_tasks', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name', 200);
            $table->integer('cid');
            $table->integer('oid');
            $table->integer('o');
            $table->dateTime('due')->default('0000-00-00 00:00:00');
            $table->dateTime('remind')->default('0000-00-00 00:00:00');
            $table->mediumText('notes');
            $table->enum('status', ['Completed', 'In Progress', 'Not Started']);
            $table->integer('pid');
            $table->string('ttime', 50);
            $table->mediumText('sub');
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
        Schema::drop('sys_tasks');
    }
}
