<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_projects', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->text('title');
            $table->enum('status', ['Open', 'Closed'])->default('Open');
            $table->text('description');
            $table->text('source');
            $table->date('started');
            $table->date('finished');
            $table->string('totaltime', 20)->default('0');
            $table->integer('cid')->default('0');
            $table->text('account');
            $table->integer('aid')->default('0');
            $table->text('tags');
            $table->integer('o')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_projects');
    }
}
