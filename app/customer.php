<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $fillable = ['nationalCode' , 'name' , 'family' , 'id' ,'address' , 'city' , 'address' , 'phoneNo' , 'mobileNo'];
    protected $primaryKey = 'customerCode' ;
    protected $table = 'customers';


    public function sale()
    {
        return $this->belongsTo('App\sale','sale_id');
        
    }
}
