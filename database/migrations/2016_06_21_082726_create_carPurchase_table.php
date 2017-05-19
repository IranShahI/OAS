<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carPurchases', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('purchaseCode',1000);
            $table->unsignedInteger('cars_carNo');
            $table->integer('count');
            $table->string('dateOfReceive');
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
        Schema::drop('carPurchase');
    }
}
