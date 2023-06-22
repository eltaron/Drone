<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::where('user_id', Auth::user()->id)->get();
        return view('trader.articles.index', ['articles' => $articles]);
    }
}
