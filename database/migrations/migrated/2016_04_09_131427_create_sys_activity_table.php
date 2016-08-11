<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_activity', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('cid')->default('0');
            $table->text('msg');
            $table->string('icon', 100)->default('');
            $table->string('stime', 50);
            $table->date('sdate');
            $table->integer('o')->default('0');
            $table->string('oname', 200);
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
        Schema::drop('sys_activity');
    }
}
