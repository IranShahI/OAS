<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $primaryKey = 'surveyCode';//



    public function surveyRespond()
    {
        return $this->hasMany('App\surveyRespond');

    }
}
