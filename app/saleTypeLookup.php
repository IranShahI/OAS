<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleTypeLookup extends Model
{
    //
    protected $primaryKey='saleTypeNo';
    protected $table='saletypelookups';

    public function termOfSale()
    {
        return $this->hasMany(termOfSale::class);
    }
}
