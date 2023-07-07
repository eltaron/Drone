<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletsController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'trader') {
            return view('trader.wallets.index', [
                'wallets' => Wallet::where('user_id', Auth::user()->id)->latest()->get(),
                'balance' => wallet::where('user_id', Auth::user()->id)->latest()->first()
            ]);
        }
    }
}
