<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_employees', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('firstname', 100);
            $table->string('middlename', 100);
            $table->string('lastname', 100);
            $table->string('nickname', 100);
            $table->string('birthdate', 100);
            $table->date('hiredate');
            $table->integer('emid');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->enum('payroll', ['Salary', 'Hourly', 'Commission', 'Other']);
            $table->enum('etype', ['FullTime', 'PartTime', 'Other']);
            $table->enum('classf', ['Parmanent', 'Seasonal', 'Temp', 'Contract']);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->string('hphone', 100);
            $table->string('address', 100);
            $table->string('emname', 100);
            $table->string('emcontact', 100);
            $table->string('emrelation', 100);
            $table->string('jobtitle', 100);
            $table->string('location', 100);
            $table->string('supervisor', 100);
            $table->string('nextreview', 100);
            $table->string('separation', 100);
            $table->mediumText('notes');
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
        Schema::drop('sys_employees');
    }
}
