<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'is_default',
        'code',
    ];

    protected $hidden = [
        'name_ar',
        'name_en',
    ];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        if (lang() == 'ar') {
            return $this->attributes['name_ar'];
        } else {
            return $this->attributes['name_en'];
        }
    }
}
