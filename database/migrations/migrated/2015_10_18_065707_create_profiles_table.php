<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id')->index();

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('defaultApartment')->unsigned()->index();
            $table->foreign('defaultApartment')->references('id')->on('apartments');

            $table->enum('gender', ['Male', 'Female', 'Other']);

//            $table->integer('gender_id')->unsigned()->index();
//            $table->foreign('gender_id')->references('id')->on('genders');

            $table->string('mobile_no');
            $table->boolean('verified');

            $table->string('avatar');

            $table->string('account', 200);
            $table->string('fname', 200);
            $table->string('lname', 200);
            $table->string('company', 200);
            $table->string('jobtitle', 200);
            $table->integer('cid');
            $table->integer('o');
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->string('address', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip', 100);
            $table->string('country', 100);
            $table->decimal('balance', 16, 2)->default('0.00');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->text('notes');
            $table->text('tags');
            $table->string('img', 100);
            $table->string('web', 200);
            $table->string('facebook', 100);
            $table->string('google', 100);
            $table->string('linkedin', 100);
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('profiles');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
