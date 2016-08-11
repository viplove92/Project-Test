<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmCustomfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_customfields', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->text('ctype');
            $table->integer('relid');
            $table->text('fieldname');
            $table->text('fieldtype');
            $table->text('description');
            $table->text('fieldoptions');
            $table->text('regexpr');
            $table->text('adminonly');
            $table->text('required');
            $table->text('showorder');
            $table->text('showinvoice');
            $table->string('jobtitle', 200);
            $table->integer('sorder');

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
        Schema::drop('crm_customfields');
    }
}
