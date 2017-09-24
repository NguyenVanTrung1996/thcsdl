<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    public $timestamps = true;
    protected $fillable = [
        'id',
		'user_id',
		'total_price',
		'order_time',
		'status',
    ];
    public  function customer()
    {
        return $this->belongsTo(Customer::class,'user_id','id');
    }
    public  function order_detail()
    {
        return $this->hasMany(Order_detail::class,'order_id','id');
    }
}
