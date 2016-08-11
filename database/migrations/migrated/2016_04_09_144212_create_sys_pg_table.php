<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysPgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_pg', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->text('name');
            $table->text('settings');
            $table->text('value');
            $table->text('processor');
            $table->text('ins');
            $table->text('c1');
            $table->text('c2');
            $table->text('c3');
            $table->text('c4');
            $table->text('c5');
            $table->enum('status', ['Active', 'Inactive']);
            $table->integer('sorder');
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
        Schema::drop('sys_pg');
    }
}
