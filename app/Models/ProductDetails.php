<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $fillable = [
        'product_id',
        'video',
        'quantity',
        'weight',
        'payment',
        'keywords',
        'whatsapp',
        'hidden_data',
        'shipping_price',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
