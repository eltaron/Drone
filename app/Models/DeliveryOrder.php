<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'delivery_id',
    ];

    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery', 'delivery_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
}
