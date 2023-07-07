<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('web.posts.index', [
            'title' => 'Posts',
            'posts' => Post::latest()->get()
        ]);
    }
}
