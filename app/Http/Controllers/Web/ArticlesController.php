<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('web.articles.index', [
            'articles' => $articles,
            'title' => 'Articles'
        ]);
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('web.articles.details', [
            'article' => $article,
            'title' => $article->title
        ]);
    }
}
