<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermOfSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termOfSales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('termOfSaleNo',1111);
            $table->integer('saleTypeNo');
            $table->string('description');
            $table->integer('car_carNo')->unsigned();
            $table->integer('cost');
            $table->integer('initialPrice');
            $table->timestamps();

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
        Schema::drop('termOfSales');
    }
}
