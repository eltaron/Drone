<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('web.articles.index');
    }
    public function show()
    {
        return view('web.articles.details');
    }
}
