<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'users';

    protected $fillable = [
        'name','email','password','username','lname','business_name','phone','baddress','bcity','bprovince','bpostal_code','type_of_account','years_of_service','service_provide_days','resume','terms','role','profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    public $timestamps = false;
}
