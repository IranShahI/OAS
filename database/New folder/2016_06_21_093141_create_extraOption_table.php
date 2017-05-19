<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extraOptions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('optionNo',11);
            $table->integer('cars_carNo')->unsigned();
            $table->integer('cost');
            $table->string('optionName');
            $table->timestamps();



            $table->foreign('cars_carNo')->references('carNo')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('extraOption');
    }
}
