<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'price',
        'describle',
        'type',
        'status',
        'pupular',
    ];
    public function order_detail()
    {
        return $this->hasMany(Order_detail::class,'product_id','id');
    }
}
