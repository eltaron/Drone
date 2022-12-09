<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'grand_total',
        'points',
        'operation',
        'description_ar',
        'description_en',
    ];

    protected $appends = ['description','time_ago'];
    protected $hidden = [
        'description_ar',
        'description_en',
    ];

    public function getTimeAgoAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function getDescriptionAttribute()
    {
        if (lang() == 'ar') {
            return $this->attributes['description_ar'];
        } else {
            return $this->attributes['description_en'];
        }
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
