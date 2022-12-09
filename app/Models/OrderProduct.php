<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product','product_id');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order','order_id');
    }

}
