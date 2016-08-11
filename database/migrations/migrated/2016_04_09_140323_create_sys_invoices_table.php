<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_invoices', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('userid');
            $table->string('account', 200);
            $table->string('cn', 100);
            $table->text('invoicenum');
            $table->date('date');
            $table->date('duedate');
            $table->dateTime('datepaid')->default('0000-00-00 00:00:00');
            $table->decimal('subtotal', 10, 2);
            $table->string('discount_type', 1)->default('f');
            $table->decimal('discount_value', 14, 2)->default('0.00');
            $table->decimal('discount', 14, 2)->default('0.00');
            $table->decimal('credit', 10, 2)->default('0.00');
            $table->string('taxname', 100);
            $table->decimal('tax', 10, 2)->default('0.00');
            $table->decimal('tax2', 10, 2)->default('0.00');
            $table->decimal('total', 10, 2)->default('0.00');
            $table->decimal('taxrate', 10, 2)->default('0.00');
            $table->decimal('taxrate2', 10, 2)->default('0.00');
            $table->text('status');
            $table->text('paymentmethod');
            $table->text('notes');
            $table->string('vtoken', 20);
            $table->string('ptoken', 20);
            $table->string('r', 100);
            $table->date('nd');
            $table->integer('eid');
            $table->string('ename', 200);
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
        Schema::drop('sys_invoices');
    }
}
