<?php

function sendResponseSuccess($message, $data)
{
    return response([
        "success" => true,
        "message" => $message,
        "data"    => $data,
    ], 200);
}

function sendResponseDebug($message)
{
    return response([
        "success" => false,
        "message" => $message,
    ], 200);
}

function sendResponseFail($message)
{
    // $data = new \App\Models\ErrorLog();
    // $data->exception = $message;
    // if(userLogin()){
    //     $data->user_id = userLogin()->id;
    // }
    // $data->save();
    return response([
        "success" => false,
        // "message" => trans('app.sorry_somthing_wrong')
        "message" => $message
    ], 200);
}

function sendResponseError($message)
{
    return response([
        "success" => false,
        // "message" => trans('app.sorry_somthing_wrong')
        "message" => $message
    ], 200);
}

function sendResponseValid($message)
{
    return response([
        "success" => false,
        // "message" => trans('app.sorry_somthing_wrong')
        "message" => $message
    ], 200);
}

function GetLanguage()
{
    return app()->getLocale();
}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}

function userLogin()
{
    return JWTAuth::parseToken()->authenticate();
}

if (!function_exists('aurl')) {
    function aurl($url)
    {
        return url('/admin/' . $url);
    }
}

if (!function_exists('turl')) {
    function turl($url)
    {
        return url('/trader/' . $url);
    }
}
if (!function_exists('durl')) {
    function durl($url)
    {
        return url('/delivery/' . $url);
    }
}
if (!function_exists('surl')) {
    function surl($url)
    {
        $path = explode('/', request()->path())[0];
        return url($path . '/' . $url);
    }
}

if (!function_exists('storeName')) {
    function storeName($storename)
    {
        return \App\Models\User::whereHas('store', function ($query) use ($storename) {
            $query->where('store_name', $storename);
        })->with('store')->first();
    }
}

if (!function_exists('userTrader')) {
    function userTrader()
    {
        return \App\Models\User::where('id', \Auth::user()->id)->with('store')->first();
    }
}
if (!function_exists('countries')) {
    function countries()
    {
        return \App\Models\Country::get();
    }
}
if (!function_exists('storeNameData')) {
    function storeNameData()
    {
        $path = explode('/', request()->path())[1];
        return \App\Models\User::whereHas('store', function ($query) use ($path) {
            $query->where('store_name', $path);
        })->with('store')->first();
    }
}

if (!function_exists('categories')) {
    function categories()
    {
        return \App\Models\Category::with('children')->where('parent_id', 0)->get();
    }
}

if (!function_exists('notifications')) {
    function notifications()
    {
        return \App\Models\Notification::with('product.user.store')->where('type', '!=', 2)->where('model_id', '!=', 0)->where('user_id', \Auth::user()->id)->latest()->take(30)->get();
    }
}

if (!function_exists('notificationsCount')) {
    function notificationsCount()
    {
        return \App\Models\Notification::with('product.user.store')->where('read_at', null)->where('model_id', '!=', 0)->where('type', '!=', 2)->where('user_id', \Auth::user()->id)->count();
    }
}

if (!function_exists('shopCategories')) {
    function shopCategories()
    {
        $user = storeNameData();

        $subCategory = \App\Models\Category::whereHas('products', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->pluck('id');

        $category = \App\Models\Category::with(['children' => function ($query) {
            $query->withCount('products');
        }])->whereHas('children', function ($query) use ($subCategory) {
            $query->whereIn('id', $subCategory);
        })->where('parent_id', null)->get();
        return $category;
    }
}

if (!function_exists('cartsCount')) {
    function cartsCount()
    {
        if (\Auth::check()) {
            return \App\Models\Cart::where('user_id', \Auth::user()->id)->count();
        }
        return 0;
    }
}

if (!function_exists('chatCount')) {
    function chatCount()
    {
        if (\Auth::check()) {
            return \App\Models\Chat::where('store_id', storeNameData()->store->id)->count();
        }
        return 0;
    }
}

if (!function_exists('wislhlistsCount')) {
    function wislhlistsCount()
    {
        if (\Auth::check()) {
            return \App\Models\Wishlist::where('user_id', \Auth::user()->id)->count();
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

if (!function_exists('currencies')) {
    function currencies()
    {
        return \App\Models\Currency::latest()->get();
    }
}


if (!function_exists('currentCurrency')) {
    function currentCurrency()
    {
        if (Request::is('api/*')) {
            return request()->header('Accept-Currency');
        } else {
            if (session()->has('current_currency')) {
                return session()->get('current_currency');
            } else {
                $currency = \App\Models\Currency::where('is_default', 1)->first();
                if ($currency) {
                    session()->put('current_currency', $currency->code);
                    return $currency->code;
                } else {
                    return "SAR";
                }
            }
        }
    }
}
