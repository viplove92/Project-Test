<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_accounts', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('account', 200);
            $table->string('fname', 200);
            $table->string('lname', 200);
            $table->string('company', 200);
            $table->string('jobtitle', 200);
            $table->integer('cid');
            $table->integer('o');
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->string('address', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip', 100);
            $table->string('country', 100);
            $table->decimal('balance', 16, 2)->default('0.00');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->text('notes');
            $table->text('tags');
            $table->text('password');
            $table->text('token');
            $table->text('ts');
            $table->string('img', 100);
            $table->string('web', 200);
            $table->string('facebook', 100);
            $table->string('google', 100);
            $table->string('linkedin', 100);
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
        Schema::drop('crm_accounts');
    }
}
