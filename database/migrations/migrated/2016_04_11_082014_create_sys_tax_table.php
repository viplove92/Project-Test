<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysTaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_tax', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->text('name');
            $table->text('state');
            $table->text('country');
            $table->decimal('rate', 10, 2);
            $table->integer('aid');
            $table->decimal('bal', 10, 2)->default('0.00');
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
        Schema::drop('sys_tax');
    }
}
