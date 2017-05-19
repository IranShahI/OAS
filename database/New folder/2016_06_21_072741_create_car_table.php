<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('carNo');
            $table->integer('carStock');
            $table->integer('carModel');
            $table->integer('carBrandLookups_brandNo')->unsigned();
            $table->integer('carNameLookups_nameNo')->unsigned();
            $table->timestamps();


            $table->foreign('carBrandLookups_brandNo')->references('brandNo')->on('carBrandLookups')->onDelete("cascade");
            $table->foreign('carNameLookups_nameNo')->references('nameNo')->on('carNameLookups')->onDelete("cascade");

           // $table->foreign('carBrandLookups_brandNo')->references('brandNo')->on('carBrandLookups');
           // $table->foreign('carNameLookups_nameNo')->references('nameNo')->on('carNameLookups');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
