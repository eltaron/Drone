<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'seen',
        'user_id',
        'category_id',
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
        return $this->belongsTo('App\Models\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'model_id');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'model_id');
    }
    public function image()
    {
        return $this->hasOne('App\Models\Image');
    }
}
