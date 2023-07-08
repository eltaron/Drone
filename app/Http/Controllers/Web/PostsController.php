<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        return view('web.posts.index', [
            'title' => 'Posts',
            'posts' => Post::withCount(['comments', 'likes'])->latest()->get()
        ]);
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'images'      => 'required|array',
        ]);
        $article = new Post();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->category_id = $request->category_id;
        $article->save();

        $mainpath = date("Y-m-d") . '/';
        $files = $request->file('images');
        if (isset($files)) {
            foreach ($files as $file) {
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName . '_' . time() . '.' . $extension;
                $path = $file->move(public_path('storage/posts/' . $mainpath), $imageName);
                $entry = new Image();
                $entry->filename = $imageName;
                $entry->url = url('') . '/storage/posts/' . $mainpath . $imageName;
                $entry->model_id = $article->id;
                $entry->user_id = Auth::user()->id;
                $entry->model = 'Post';
                $entry->save();
            }
        }
        return back()->with('success', 'Added successfully');
    }
}
