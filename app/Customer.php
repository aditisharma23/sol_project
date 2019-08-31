<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'users';
    protected $fillable = ['name', 'email', 'username','username','lname','business_name','phone','baddress','bcity','bprovince','bpostal_code','type_of_account'];
}
