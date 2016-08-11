<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysQuoteitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_quoteitems', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->integer('quote_id')->unsigned()->index();
            $table->foreign('quote_id')->references('id')->on('sys_quotes')->onDelete('cascade');

            $table->integer('qid');
            $table->text('itemcode');
            $table->text('description');
            $table->integer('qty');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->boolean('taxable');
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
        Schema::drop('sys_quoteitems');
    }
}
