<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_transactions', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('account', 200);
            $table->enum('type', ['Income', 'Expense', 'Transfer']);
            $table->string('category', 200);
            $table->decimal('amount', 18, 2);
            $table->string('payer', 200);
            $table->string('payee', 200);
            $table->integer('payerid');
            $table->integer('payeeid');
            $table->string('method', 200);
            $table->string('ref', 200);
            $table->enum('status', ['Cleared', 'Uncleared', 'Reconciled', 'Void'])->default('Cleared');
            $table->mediumText('description');
            $table->mediumText('tags');
            $table->decimal('tax', 18, 2)->default('0.00');
            $table->date('date');
            $table->decimal('dr', 18, 2)->default('0.00');
            $table->decimal('cr', 18, 2)->default('0.00');
            $table->decimal('bal', 18, 2)->default('0.00');
            $table->integer('iid')->default('0');
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
        Schema::drop('sys_transactions');
    }
}
