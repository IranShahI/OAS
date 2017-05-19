<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id',111111);
            $table->string('saleTrackingCode');
            $table->date('date');
            $table->integer('termOfSales_termOfSaleNo')->unsigned();
            $table->integer('cars_carNo')->unsigned();
            $table->integer('statusLookups_statusCode')->unsigned();   
            $table->timestamps();



            $table->foreign('termOfSales_termOfSaleNo')->references('termOfSaleNo')->on('termOfSales');
            $table->foreign('cars_carNo')->references('carNo')->on('cars');
            $table->foreign('statusLookups_statusCode')->references('statusCode')->on('statusLookups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sale');
    }
}
