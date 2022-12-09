<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'country_id',
    ];


    protected $appends = ['name'];
    protected $hidden = [
        'name_ar', 'name_en'
    ];

    public function getNameAttribute()
    {
        if (lang() == 'ar') {
            return $this->attributes['name_ar'];
        } else {
            return $this->attributes['name_en'];
        }
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User', 'city_id');
    }
}
