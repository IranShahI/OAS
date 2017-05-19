<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleTypeLookupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saleTypeLookups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('saleTypeNo');
            $table->string('saleType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('saleTypeLookups');
    }
}
