<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_notes', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->mediumText('contents');
            $table->enum('type', ['Private', 'Public'])->default('Private');
            $table->integer('o');
            $table->integer('date');
            $table->integer('updated');
            $table->integer('uo');
            $table->integer('vtoken');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_notes');
    }
}
