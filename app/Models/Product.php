<?php

namespace App\Models\Models;

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
        'special',
        'status',
        'code',
        'category_id'
    ];
    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'product_id');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Image', 'product_id');
    }


    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }

    public function offer()
    {
        return $this->hasOne('App\Models\Offer','product_id');
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
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
