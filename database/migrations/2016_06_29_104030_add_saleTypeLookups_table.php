<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSaleTypeLookupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('termOfSales', function (Blueprint $table) {
            //
            $table->integer('saleTypeLookups_saleTypeNo')->unsigned();

            $table->foreign('saleTypeLookups_saleTypeNo')->references('saleTypeNo')->on('saleTypeLookups');
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
