<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasRoles,  HasFactory, Notifiable;

    protected $guard_name = 'web';
    protected $table = 'users';
    protected $guard = "web";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'image',
        'status',
        // 'country_id',
        'country_id',
        'roles_name',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function country()
    {
        return $this->hasMany(Country::class, 'id', 'country_id');
    }
}
