<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address_id',
        'discount_coupon_id',
        'price',
        'shipping_price',
        'code',
        'status',
        'payment_method',
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function products()
    {
        return $this->hasMany('App\Models\OrderProduct', 'order_id');
    }

    public function delivery()
    {
        return $this->hasOne('App\Models\DeliveryOrder', 'order_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function address()
    {
        return $this->belongsTo('App\Models\Address', 'address_id');
    }

    public function request_user()
    {
        return $this->belongsTo('App\Models\User', 'request_user_id');
    }

    public function discount_coupon()
    {
        return $this->belongsTo('App\Models\DiscountCoupon', 'discount_coupon_id');
    }
    public function returned()
    {
        return $this->hasOne('App\Models\Returned', 'returned_id');
    }
}
