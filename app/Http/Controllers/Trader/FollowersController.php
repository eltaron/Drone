<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function index()
    {
        return view('trader.followers.index');
    }
}