<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowersController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'delivery') {
            return view('delivery.followers.index', [
                'followers' => Follow::where(['model_id' => Auth::user()->id, 'model' => 'User'])->latest()->get()
            ]);
        }
    }
}
