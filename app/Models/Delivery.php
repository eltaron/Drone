<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'delivery_name',
        'delivery_Code',
        'logo',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'google',
    ];
    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\DeliveryOrder', 'user_id');
    }
}