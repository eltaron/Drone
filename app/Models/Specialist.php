<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model

{
    protected $fillable = [
        'product_id',
        'end_at',
    ];

    protected $hidden = [
        'end_at',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute()
    {
        $date = \Carbon\Carbon::parse($this->end_at);
        return $date->diffForHumans();
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
