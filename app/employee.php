<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected  $table="users";
    protected $primaryKey = 'personalCode';

    protected $fillable = [
        'name', 'email', 'password','personalCode','post','postLookups_postID',
    ];

    public function postLookup()
    {
        return $this->belongsTo('App\postLookup','postID');
    }
}
