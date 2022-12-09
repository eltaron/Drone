<?php

namespace App\Models\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'profileLogo',
        'cover',
        'address',
        'about',
        'city_id',
        'by_store',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function store()
    {
        return $this->hasOne('App\Models\Store','user_id');
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article','user_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function carts()
    {
        return $this->hasMany('App\Models\Cart','user_id');
    }

    public function wishlists()
    {
        return $this->hasMany('App\Models\Wishlist','user_id');
    }
}