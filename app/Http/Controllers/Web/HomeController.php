<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Message;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function faqs()
    {
        return view('web.faqs.faqs');
    }
    public function error()
    {
        return view('web.includes.404_page');
    }
    public function contact(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'telephone' => 'required',
            'message' => 'required',
        ]);
        $message = new Message();
        $message->username = $request->name;
        $message->email = $request->email;
        $message->phone = $request->telephone;
        $message->message = $request->message;
        $message->save();
        return back();
    }
    public function addtowishlist(Request $request)
    {
        $validation = $request->validate([
            'id' => 'required',
        ]);
        $message = new Wishlist();
        $message->product_id = $request->id;
        $message->user_id = Auth::user()->id;
        $message->save();
        return back();
    }
    public function addtocart(Request $request)
    {
        $validation = $request->validate([
            'id' => 'required',
        ]);
        $message = new Cart();
        $message->product_id = $request->id;
        $message->user_id = Auth::user()->id;
        $message->quantity = 1;
        $message->save();
        return back();
    }
}
