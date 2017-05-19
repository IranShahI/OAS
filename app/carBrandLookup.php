<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carBrandLookup extends Model
{
    //
    protected $primaryKey='brandNo';
    protected $table = "carBrandLookups";

    public function car()
    {
        return $this->hasMany('App\car');
        
    }
}
