<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class extraOption extends Model
{
    //protected $fillable = [''];
    protected $primaryKey = 'carNo'; //

    public function car()
    {
        return $this->belongsTo('App\car','carNo');

    }
    
}
