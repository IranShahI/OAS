<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    //
    protected $primaryKey='carNo';
    protected $table='cars';
    protected $fillable = [
        'name','carStock','carModel','carBrandLookups_brandNo','carNameLookups_nameNo',
    ];

    public function carPurchases()
    {
        return $this->hasMany('App\carPurchase');
    }

    public function extraOptions()
    {
        return $this->hasMany('App\extraOption','carNo');
    }

    public function carBrandLookups()
    {
        return $this->belongsTo('App\carBrandLookup','carBrandLookups_brandNo');
    }

    public function carNameLookups()
    {
        return $this->belongsTo('App\carNameLookup','carNameLookups_nameNo');
    }

    public function termOfSale()
    {
        return $this->hasMany('App\termOfSale');
        }
    
}
