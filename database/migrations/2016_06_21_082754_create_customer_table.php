<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->integer('nationalCode');
            $table->integer('id');
            $table->string('name');
            $table->string('family');
            $table->string('address');
            $table->string('city');
            $table->integer('phoneNo');
            $table->integer('mobileNo');
            $table->string('sale_saleTrackingCode');
            $table->timestamps();



            $table->foreign('sale_saleTrackingCode')->references('saleTrackingCode')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
