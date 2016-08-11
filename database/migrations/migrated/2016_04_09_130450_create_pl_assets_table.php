<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_assets', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('title', 200);
            $table->integer('qty');
            $table->decimal('price', 14, 2);
            $table->decimal('total', 14, 2);
            $table->date('pdate');
            $table->mediumText('memo');
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
        Schema::drop('pl_assets');
    }
}
