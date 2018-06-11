<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'location', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function media() {

        return $this->hasMany('App\Media');

    }

    public function calendar() {

        return $this->hasMany('App\Calendar');

    }

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function isAdmin() {
        return $this->type === self::ADMIN_TYPE;
    }
}
