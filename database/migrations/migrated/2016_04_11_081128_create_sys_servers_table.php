<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_servers', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('ip', 50);
            $table->string('hostname', 100);
            $table->string('username', 100);
            $table->mediumText('password');
            $table->string('stype', 50);
            $table->mediumText('apikey');
            $table->mediumText('memo');
            $table->enum('status', ['Active', 'Inactive']);
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
        Schema::drop('sys_servers');
    }
}
