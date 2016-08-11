<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlmcsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flmcs_users', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('aid');
            $table->string('domain', 100);
            $table->integer('sid');
            $table->string('server', 100);
            $table->string('client', 250);
            $table->string('phone', 30);
            $table->string('email', 100);
            $table->mediumText('address');
            $table->date('pdate');
            $table->string('rdid', 100);
            $table->string('rdpass', 100);
            $table->string('rdtype', 50);
            $table->string('sdir', 50);
            $table->string('cpuser', 50);
            $table->string('cppass', 50);
            $table->string('dbuser', 50);
            $table->string('dbpass', 50);
            $table->string('dbname', 50);
            $table->mediumText('memo');
            $table->string('domain_oid', 100);
            $table->string('ns1', 100);
            $table->string('ns2', 100);
            $table->string('ns3', 100);
            $table->string('ns4', 100);
            $table->string('status', 50)->default('Active');
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
        Schema::drop('flmcs_users');
    }
}
