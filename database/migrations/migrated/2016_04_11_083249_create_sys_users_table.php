<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_users', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('username', 100);
            $table->string('fullname', 45);
            $table->string('phonenumber', 20);
            $table->mediumText('password');
            $table->string('user_type', 50)->default('Full Access');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->datetime('last_login');
            $table->string('email', 200);
            $table->datetime('creationdate');
            $table->enum('otp', ['Yes', 'No'])->default('No');
            $table->enum('pin_enabled', ['Yes', 'No'])->default('No');
            $table->mediumText('pin');
            $table->text('img');
            $table->enum('api', ['Yes', 'No'])->default('No');
            $table->string('pwresetkey', 100);
            $table->string('keyexpire', 100);
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
        Schema::drop('sys_users');
    }
}
