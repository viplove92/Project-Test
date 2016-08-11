<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('crm_account_id')->unsigned()->index();
            $table->foreign('crm_account_id')->references('id')->on('crm_accounts')->onDelete('cascade');

            $table->integer('sys_tag_id')->unsigned()->index();
            $table->foreign('sys_tag_id')->references('id')->on('sys_tags')->onDelete('cascade');

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
        //
    }
}
