<?php

function sendResponseSuccess($message,$data){
    return response([
        "success" => true,
        "message" => $message,
        "data"    => $data,
    ],200);
}

function sendResponseError($message){
    return response([
        "success" => false,
        "message" => $message,
    ],200);
}

function GetLanguage() {
    return app()->getLocale();
}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function userLogin() {
    return JWTAuth::parseToken()->authenticate();
}

if (!function_exists('aurl')) {
    function aurl($url)
    {
        return url('/admin/' . $url);
    }
}


if (!function_exists('surl')) {
    function surl($url)
    {
        $path = explode('/',request()->path())[1];
        return url("/restaurant/".$path."/".$url);
    }
}


if (!function_exists('notifications')) {
    function notifications()
    {
        return \App\Models\Notification::with('product.user.store')->where('type','!=',2)->where('model_id','!=',0)->where('user_id',\Auth::user()->id)->latest()->take(30)->get();
    }
}

if (!function_exists('notificationsCount')) {
    function notificationsCount()
    {
        return \App\Models\Notification::with('product.user.store')->where('read_at',null)->where('model_id','!=',0)->where('type','!=',2)->where('user_id',\Auth::user()->id)->count();
    }
}

if (!function_exists('dNotifications')) {
    function dNotifications()
    {
        return \App\Models\Notification::with('order')->where('user_id',\Auth::user()->id)->latest()->take(30)->get();
    }
}

if (!function_exists('dNotificationsCount')) {
    function dNotificationsCount()
    {
        return \App\Models\Notification::with('order')->where('read_at',null)->where('user_id',\Auth::user()->id)->latest()->take(30)->count();
    }
}

if (!function_exists('activeMenu')) {
    function activeMenu($url)
    {
        if(Request::is('admin/'.$url)){
            return 'active';
        }
    }
}

if (!function_exists('cartsCount')) {
    function cartsCount()
    {
        if(\Auth::check()){
            return \App\Models\Cart::where('user_id',\Auth::user()->id)->count();
        }
        return 0;
    }
}

if (!function_exists('wislhlistsCount')) {
    function wislhlistsCount()
    {
        if(\Auth::check()){
            return \App\Models\Wishlist::where('user_id',\Auth::user()->id)->count();
        }
        return 0;
    }
}

if (!function_exists('lang')) {
    function lang()
    {
        if (session()->has('lang')) {
            return session()->get('lang');
        } else {
            session()->put('lang', 'ar');
            return 'ar';
        }
    }
}
