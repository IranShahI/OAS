<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class termOfSale extends Model
{
    protected $primaryKey = 'termOfSaleNo';
    protected $table='termOfSales';
    protected $fillable = [
        'description', 'car_carNo', 'cost','initialPrice','saleTypeLookups_saleTypeNo',
    ];



    public function sale()
    {
        return $this->hasMany('App\sale');

    }


    public function saleTypeLookup()
    {
        return $this->belongsTo('App\saleTypeLookup','saleTypeLookups_saleTypeNo');

    }

    public function car()
    {
        return $this->belongsTo('App\car','car_carNo');
    }
}
