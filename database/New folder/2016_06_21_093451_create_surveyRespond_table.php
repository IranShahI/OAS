<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyRespondTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyResponds', function (Blueprint $table) {
            $table->increments('surveyRespondCode',11);
            $table->integer('surveys_surveyCode')->unsigned();
            $table->string('respond');
            $table->timestamp('surveySubmitTime');
            $table->timestamps();


            $table->foreign('surveys_surveyCode')->references('surveyCode')->on('surveys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surveyRespond');
    }
}
