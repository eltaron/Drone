<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('web.stores.index', [
            'stores' => Shop::all(),
            'rstores' => Shop::inRandomOrder()->get(),
        ]);
    }
}
