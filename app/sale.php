<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';

    public function payment()
    {
        return $this->hasMany('App\payment');
    }

    public function customer()
    {
        return $this->hasOne('App\customer');

    }

    public function termOfSale()
    {
        return $this->belongsTo('App\termOfSale','termOfSale_termOfSaleNo');

    }

    public function surveyRespond()
    {
        return $this->belongsTo('App\surveyRespond');

    }


    public function car()
    {
        return $this->belongsTo('App\car','cars_carNo');
        
    }
}
