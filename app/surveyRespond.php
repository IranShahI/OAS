<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveyRespond extends Model
{
    protected $primaryKey = 'surveyRespondCode';//


    public function survey()
    {
        return $this->hasOne('App\survey','surveyCode');

    }

    public function sale()
    {
        return $this->hasOne('App\sale','saleTrackingCode');

    }
}
