<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use Notifiable;


    protected $guard_name = 'admin';
    protected $table = 'users';
    protected $guard = "admin";
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  
    protected $connection = 'mysql';

    public function AauthAcessToken()
    {
        return $this->hasMany('\App\OauthAccessToken');
    }

//    public function groups()
//    {
//        return $this->belongsToMany(Group::class);
//    }

//    public function tickets()
//    {
//        return $this->hasMany(ticket::class, 'agent_id');
//    }

//    public function orders()
//    {
//        return $this->hasMany(orders::class);
//    }

    public function country(){
        return $this->hasMany(Country::class);
    }

    public function getImageAttribute($value)
    {
        if (\request()->is('api/*')) {
            return url($value);
        }
        return $value;
    }

//    public function addresses()
//    {
//        return $this->hasManyThrough(Shipping::class, orders::class, 'user_id', 'order_id');
//    }
//    public function newQuery($excludeDeleted = true)
//    {
//        return parent::newQuery($excludeDeleted)->where($this->getTable() . '.guard', "admin");
//    }

}
