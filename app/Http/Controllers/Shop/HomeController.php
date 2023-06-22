<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($storename)
    {
        // return view('shop.home.index');
        echo $storename;
    }
}
