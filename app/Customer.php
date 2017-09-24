<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone',
        'sex',
        'brithday',
        'avatar',
        'address',
        'role',
    ];
    public function order()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
    
}
