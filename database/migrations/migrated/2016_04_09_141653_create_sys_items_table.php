<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_items', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->mediumText('name');
            $table->string('unit', 100);
            $table->decimal('sales_price', 16, 2)->default('0.00');
            $table->string('item_number', 100);
            $table->mediumText('description');
            $table->enum('type', ['Service', 'Product']);
            $table->enum('track_inventory', ['Yes', 'No'])->default('No');
            $table->enum('negative_stock', ['Yes', 'No'])->default('No');
            $table->integer('available')->default('0');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->date('added')->default('0000-00-00');
            $table->date('last_sold')->default('0000-00-00');
            $table->mediumText('e');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sys_items');
    }
}
