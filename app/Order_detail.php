<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = "orders";
    public $timestamps = true;
    protected $fillable = [
        'id',
		'amount',
		'price',
    ];
    public  function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public  function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
