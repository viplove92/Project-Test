<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateEasyAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('easy_accounts', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('account', 100);
            $table->string('acc_number', 100);
            $table->string('description', 100);
            $table->decimal('balance', 18, 2)->default('0.00');
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
        Schema::drop('easy_accounts');
        DB::statement("SET foreign_key_checks = 1");
    }
}
