<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_id',
        'title',
        'price',
        'description',
        'seen',
        'status',
        'code',
        'category_id'
    ];
    protected $appends = [
        'time_ago'
    ];

    public function getCurrencyAttribute()
    {
        $store = Shop::where('id', $this->shop_id)->first();
        $user = User::where('id', $store->user_id)->with('city.country')->first();
        if ($user->city()->exists()) {
            return $user->city->country->currency;
        }
        return "";
    }

    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'model_id');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Image', 'model_id');
    }


    public function shop()
    {
        return $this->belongsTo('App\Models\Shop', 'shop_id');
    }

    public function offer()
    {
        return $this->hasOne('App\Models\Offer', 'product_id');
    }

    public function specialist()
    {
        return $this->hasOne('App\Models\Specialist', 'product_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'product_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
