<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletsController extends Controller
{
    public function index()
    {
        return view('trader.wallets.index');
    }
}
