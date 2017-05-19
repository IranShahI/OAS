<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id',2222);
            $table->string('name');
            $table->string('personalCode')->unique();
            $table->integer('postLookups_postID')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isAdmin');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('postLookups_postID')->references('postID')->on('postLookups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
