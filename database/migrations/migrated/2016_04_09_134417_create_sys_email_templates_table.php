<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysEmailTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_email_templates', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('tplname', 128);
            $table->integer('language_id');
            $table->text('subject');
            $table->text('message');
            $table->string('send', 50);
            $table->enum('core', ['Yes', 'No'])->default('Yes');
            $table->tinyInteger('hidden')->default('0');
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
        Schema::drop('sys_email_templates');
    }
}
