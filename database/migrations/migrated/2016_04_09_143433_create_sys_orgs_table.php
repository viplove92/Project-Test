<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_orgs', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name', 100);
            $table->mediumText('contacts');
            $table->string('phone', 100);
            $table->mediumText('phones');
            $table->string('email', 100);
            $table->mediumText('emails');
            $table->string('web', 100);
            $table->string('address', 200);
            $table->mediumText('notes');
            $table->mediumText('tags');
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
        Schema::drop('sys_orgs');
    }
}
