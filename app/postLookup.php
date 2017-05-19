<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postLookup extends Model
{
    //
    protected $primaryKey = 'postID';
    protected $table = "postLookups";

    public function User()
    {
        return $this->hasMany('App\userModel');
    }
}
