<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carBrandLookup extends Model
{
    //
    protected $primaryKey='brandNo';
    protected $table = "carbrandlookups";

    public function car()
    {
        return $this->hasMany('App\car');
        
    }
}
