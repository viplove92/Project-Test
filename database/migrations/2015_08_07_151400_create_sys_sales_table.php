<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_sales', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('cid')->default('0');
            $table->integer('oid')->default('0');
            $table->string('oname', 200);
            $table->mediumText('description');
            $table->decimal('amount', 14, 2);
            $table->string('term', 100);
            $table->string('milestone', 100);
            $table->integer('p');
            $table->integer('o');
            $table->date('open');
            $table->date('close');
            $table->enum('status', ['New', 'In Progress', 'Won', 'Lost']);
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
        Schema::drop('sys_sales');
    }
}
