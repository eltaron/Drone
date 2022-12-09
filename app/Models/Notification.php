<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
        'content',
        'model',
        'model_id',
        'read_at',
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product','model_id');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order','model_id');
    }
}