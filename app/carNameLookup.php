<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carNameLookup extends Model
{
    //
    protected $primaryKey='nameNo';
    protected $table = "carNameLookups";
    public $timestamps = false;


    public function car()
    {
        return $this->hasMany('App\car');

    }
}
