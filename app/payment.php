<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $primaryKey = 'transactionNo';//


    public function sale()
    {
        return $this->belongsTo('App\sale','saleTrackingCode');

    }
}
