<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home.index');
    }
    public function language($lang)
    {
        session()->put('lang', $lang);
        return back()->with('success', 'language change successful');
    }
}
