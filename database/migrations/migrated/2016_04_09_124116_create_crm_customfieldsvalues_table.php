<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmCustomfieldsvaluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_customfieldsvalues', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('fieldint');
            $table->integer('relid');
            $table->text('fvalue');
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
        Schema::drop('crm_customfieldsvalues');
    }
}
