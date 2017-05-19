<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColoumnCarid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('termOfSales', function (Blueprint $table) {
            $table->integer('car_carNo')->unsigned();
            $table->foreign('car_carNo')->references('carNo')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('termOfSales', function (Blueprint $table) {
            //
        });
    }
}
