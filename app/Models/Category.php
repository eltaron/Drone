<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'slug',
        'icon',
        'keywords',
        'description',
        'parent_id'
    ];

    protected $appends = ['name'];
    protected $hidden = [
        'name_ar', 'name_en'
    ];

    public function getNameAttribute()
    {
        if (lang() == 'ar') {
            return $this->attributes['name_ar'];
        } elseif (request()->header('lang') == 'ar') {
            return $this->attributes['name_ar'];
        } else {
            return $this->attributes['name_en'];
        }
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }
}
