<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamp('paymentDate');
            $table->string('sale_saleTrackingCode');
            $table->bigInteger('amount');
            $table->string('digitalReceipt');
            $table->string('paymentGateway');
            $table->increments('transactionNo',100);
            $table->boolean('success');
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
        Schema::drop('payments');
    }
}
