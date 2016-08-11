<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropStockidFromInventories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        DB::statement("SET foreign_key_checks=0");

        Schema::table('inventories', function (Blueprint $table) {
            $table->dropForeign('inventories_stock_id_foreign');
            $table->dropIndex('inventories_stock_id_index');
            $table->dropColumn('stock_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            //
        });
    }
}
