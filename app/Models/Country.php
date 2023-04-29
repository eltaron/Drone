<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_code',
        'name_en',
        'name_ar',
        'phonecode',
        'currency_ar',
        'currency_en',
        'language'
    ];

    protected $appends = ['name', 'currency'];
    protected $hidden = [
        'name_ar',
        'name_en',
        'currency_ar',
        'currency_en',
    ];

    public function getNameAttribute()
    {
        if (lang() == 'ar') {
            return $this->attributes['name_ar'];
        } else {
            return $this->attributes['name_en'];
        }
    }

    public function getCurrencyAttribute()
    {
        if (lang() == 'ar') {
            return $this->attributes['currency_ar'];
        } else {
            return $this->attributes['currency_en'];
        }
    }

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'country_id');
    }
}
