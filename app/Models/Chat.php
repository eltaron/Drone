<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'store_id',
        'delivery_id',
        'status',
    ];

    protected $hidden = [
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

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function store()
    {
        return $this->belongsTo('App\Models\Store', 'store_id');
    }
    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery', 'delivery_id');
    }
}
