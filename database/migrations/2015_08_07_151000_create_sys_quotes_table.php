<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_quotes', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->integer('apartment_id')->unsigned()->index();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->integer('profile_id')->unsigned()->index();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            $table->text('subject');
            $table->enum('stage', ['Draft', 'Delivered', 'On Hold', 'Accepted', 'Lost', 'Dead'])->default('Draft');
            $table->date('validuntil');
            $table->integer('userid');
            $table->text('invoicenum');
            $table->text('cn');
            $table->text('account');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('companyname');
            $table->text('email');
            $table->text('address1');
            $table->text('address2');
            $table->text('city');
            $table->text('state');
            $table->text('postcode');
            $table->text('country');
            $table->text('phonenumber');
            $table->integer('currency');
            $table->decimal('subtotal', 10, 2);
            $table->text('discount_type');
            $table->decimal('discount_value', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->text('taxname');
            $table->decimal('taxrate', 10, 2);
            $table->decimal('tax1', 10, 2);
            $table->decimal('tax2', 10, 2);
            $table->decimal('total', 10, 2);
            $table->text('proposal');
            $table->text('customernotes');
            $table->text('adminnotes');
            $table->date('datecreated');
            $table->date('lastmodified');
            $table->date('datesent');
            $table->date('dateaccepted');
            $table->text('vtoken');
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
        Schema::drop('sys_quotes');
    }
}
