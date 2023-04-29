<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'invoice_id',
        'invoice_status',
        'invoice_reference',
        'created_date',
        'comments',
        'payment_gateway',
        'invoice_display_value',
        'transaction_id',
        'transaction_status',
        'paid_currency',
        'paid_currency_value',
        'card_number',
        'is_success',
        'operation',
        'order_id',
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
        return $this->belongsTo('App\Models\Models\User', 'user_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Models\Order', 'order_id');
    }
}
