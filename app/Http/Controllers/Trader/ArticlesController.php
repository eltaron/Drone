<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'trader') {
            $articles = Article::where('user_id', Auth::user()->id)->latest()->get();
            return view('trader.articles.index', ['articles' => $articles]);
        }
    }
    public function store(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'title'       => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'tags'        => 'nullable',
                'images'      => 'required|array',
            ]);
            $article = new Article();
            $article->user_id = Auth::user()->id;
            $article->title = $request->title;
            $article->description = $request->description;
            $article->category_id = $request->category_id;
            $article->tags = $request->tags;
            $article->save();

            $mainpath = date("Y-m-d") . '/';
            $files = $request->file('images');
            if (isset($files)) {
                foreach ($files as $file) {
                    $fileNameWithExtension = $file->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $imageName = $fileName . '_' . time() . '.' . $extension;
                    $path = $file->move(public_path('storage/articles/' . $mainpath), $imageName);
                    $entry = new Image();
                    $entry->filename = $imageName;
                    $entry->url = url('') . '/storage/articles/' . $mainpath . $imageName;
                    $entry->model_id = $article->id;
                    $entry->user_id = Auth::user()->id;
                    $entry->model = 'Article';
                    $entry->save();
                }
            }
            return back()->with('success', 'Added successfully');
        }
    }
    public function edit(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'title'       => 'required',
                'description' => 'required',
                'images'      => 'array',
                'tags'        => 'nullable',
                'article_id'  => 'required',
            ]);
            $article = Article::find($request->article_id);
            $article->title = $request->title;
            $article->description = $request->description;
            if ($request->category_id) {
                $article->category_id = $request->category_id;
            }
            $article->tags = $request->tags;
            $article->save();
            $mainpath = date("Y-m-d") . '/';
            $files = $request->file('images');
            if (isset($files)) {
                foreach ($files as $file) {
                    $fileNameWithExtension = $file->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $imageName = $fileName . '_' . time() . '.' . $extension;
                    $path = $file->move(public_path('storage/articles/' . $mainpath), $imageName);
                    $entry = new Image();
                    $entry->filename = $imageName;
                    $entry->url = url('') . '/storage/articles/' . $mainpath . $imageName;
                    $entry->model_id = $article->id;
                    $entry->user_id = Auth::user()->id;
                    $entry->model = 'Article';
                    $entry->save();
                }
            }
            return back()->with('success', 'Edit successfully');
        }
    }
    public function destroy(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'article_id'       => 'required',
            ]);
            $article = Article::find($request->article_id);
            $article->delete();
            return back()->with('success', 'Deleted successfulky');
        }
    }
}
