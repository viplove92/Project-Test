<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysInvoiceitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_invoiceitems', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('invoiceid')->default('0');
            $table->integer('userid');
            $table->text('type');
            $table->integer('relid');
            $table->string('itemcode', 100);
            $table->text('description');
            $table->string('qty', 20)->default('1');
            $table->decimal('amount', 14, 2)->default('0.00');
            $table->integer('taxed');
            $table->decimal('taxamount', 14, 2)->default('0.00');
            $table->decimal('total', 14, 2)->default('0.00');
            $table->date('duedate');
            $table->text('paymentmethod');
            $table->text('notes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_invoiceitems');
    }
}
