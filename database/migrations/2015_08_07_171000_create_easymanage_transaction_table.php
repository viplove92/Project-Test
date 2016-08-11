<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEasymanageTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('easymanage_transaction', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->integer('account_id')->unsigned()->index();
            $table->foreign('account_id')->references('id')->on('easy_accounts')->onDelete('cascade');

            $table->enum('type', ['Income', 'Expense', 'Transfer', 'Delete']);

            $table->enum('fromto', ['From', 'To'])->nullable();

            $table->integer('category_id')->unsigned()->nullable()->index();
            $table->foreign('category_id')->references('id')->on('sys_cats')->onDelete('cascade');

            $table->decimal('amount', 18, 2);

            $table->string('payer', 200);
            $table->string('payee', 200);

            $table->integer('payer_id')->unsigned()->nullable()->index();
            $table->foreign('payer_id')->references('id')->on('profiles')->onDelete('cascade');
//            $table->foreign('payer_id')->references('id')->on('crm_accounts')->onDelete('cascade');

            $table->integer('payee_id')->unsigned()->nullable()->index();
            $table->foreign('payee_id')->references('id')->on('profiles')->onDelete('cascade');
//            $table->foreign('payee_id')->references('id')->on('crm_accounts')->onDelete('cascade');

            $table->integer('payment_id')->unsigned()->nullable()->index();
            $table->foreign('payment_id')->references('id')->on('sys_pmethods')->onDelete('cascade');

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
        Schema::drop('easymanage_transaction');
    }
}
