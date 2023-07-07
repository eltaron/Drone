<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Message;
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
}
