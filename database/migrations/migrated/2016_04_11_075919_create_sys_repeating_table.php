<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysRepeatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_repeating', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('account', 200);
            $table->enum('type', ['Income', 'Expense', 'Transfer']);
            $table->string('category', 200);
            $table->decimal('amount', 10, 2);
            $table->string('payer', 200);
            $table->string('payee', 200);
            $table->string('method', 200);
            $table->string('ref', 200);
            $table->enum('status', ['Cleared', 'Uncleared', 'Reconciled', 'Void'])->default('Uncleared');
            $table->mediumText('description');
            $table->mediumText('tags');
            $table->decimal('tax', 10, 2)->default('0.00');
            $table->date('date');
            $table->date('pdate');
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
        Schema::drop('sys_repeating');
    }
}
