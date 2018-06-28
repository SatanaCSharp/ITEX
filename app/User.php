<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN = 1;
    const USER = 2;
    const MANAGER = 3;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isAdmin()
    {
        if (isset($this->role)) {
            return $this->role == User::ADMIN;
        }
        return false;
    }

    public function isManager()
    {
        if (isset($this->role)) {
            return $this->role == User::MANAGER;
        }
        return false;
    }

    public function isUser()
    {
        if (isset($this->role)) {
            return $this->role == User::USER;
        }
        return false;
    }

    public function companies()
    {
        return $this->hasOne('App\Company');
    }

    public function partisipants()
    {
        return $this->hasMany('App\Partisipant');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
