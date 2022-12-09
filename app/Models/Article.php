<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'seen',
        'special',
        'status',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image', 'article_id');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Image', 'article_id');
    }


    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'article_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'article_id');
    }
}
