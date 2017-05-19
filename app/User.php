<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','personalCode','postLookups_postID',
    ];


    protected $primaryKey = 'personalCode';
    protected $username = "personalCode";

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function postLookup()
    {
        return $this->belongsTo('App\postLookup', 'postLookups_postID');
    }
}
