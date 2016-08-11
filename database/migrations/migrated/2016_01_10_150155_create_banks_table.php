<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');

            $table->string('bank');
            $table->string('ifsc');
            $table->string('micr');
            $table->string('branch');
            $table->string('address');
            $table->string('contact');
            $table->string('city');
            $table->string('district');
            $table->string('state');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('banks');
    }
}
