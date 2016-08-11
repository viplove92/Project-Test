<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrmAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hrm_attendance', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->date('date');
            $table->integer('eid');
            $table->string('ename', 200);
            $table->dateTime('ent');
            $table->dateTime('ex');
            $table->string('status', 200);
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
        Schema::drop('hrm_attendance');
    }
}
