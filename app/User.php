<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roles_id','firstname','lastname','username','password', 'email', 'mobile','address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    function reviews() {
        return $this->hasMany('\App\Reviews');
    }


    public function role() {
        return $this->belongsTo('\App\Roles', 'roles_id');
    }

}
