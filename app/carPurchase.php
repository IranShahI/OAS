<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carPurchase extends Model
{
    //
    protected $primaryKey='purchaseCode';

    public function car()
    {
        return $this->belongsTo('App\car','carNo');
    }
    
}
