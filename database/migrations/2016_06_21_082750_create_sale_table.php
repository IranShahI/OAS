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
            $table->engine = 'InnoDB';
            $table->increments('id',111111);
            $table->string('saleTrackingCode')->index();
            $table->date('date');
            $table->integer('termOfSale_termOfSaleNo')->unsigned();
            $table->integer('cars_carNo')->unsigned();
            $table->integer('statusLookup_statusCode')->unsigned();
            $table->timestamps();



            $table->foreign('termOfSale_termOfSaleNo')->references('termOfSaleNo')->on('termOfSales');
            $table->foreign('cars_carNo')->references('carNo')->on('cars');
            $table->foreign('statusLookup_statusCode')->references('statusCode')->on('statusLookups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
