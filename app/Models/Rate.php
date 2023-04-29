<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'model_id',
        'model',
        'rate',
        'operation',
        'description_ar',
        'description_en',
    ];

    protected $appends = ['description'];
    protected $hidden = [
        'description_ar',
        'description_en',
    ];

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
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
