<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_cats', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name', 100);
            $table->enum('type', ['Income', 'Expense']);
            $table->integer('sorder')->default('0');
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
        DB::statement("SET foreign_key_checks = 0");
        Schema::drop('sys_cats');
        DB::statement("SET foreign_key_checks = 1");
    }
}
