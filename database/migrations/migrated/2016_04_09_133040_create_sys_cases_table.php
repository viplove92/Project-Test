<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_cases', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->text('title');
            $table->enum('status', ['Open', 'Closed'])->default('Open');
            $table->text('description');
            $table->text('source');
            $table->integer('pid');
            $table->integer('cid');
            $table->text('account');
            $table->integer('aid');
            $table->text('tags');
            $table->integer('o');
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
        Schema::drop('sys_cases');
    }
}
