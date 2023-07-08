<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Delivery;
use App\Models\Point;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index()
    {
        return view('web.auth.index');
    }
    public function cities(Request $request)
    {
        try {
            return response()->json([
                'cities' =>  City::where('country_id', $request->country_id)->get(),
                'country' =>  Country::where('id', $request->country_id)->first(),
            ]);
        } catch (\Exception $e) {
            return response()->json(['failed' => $e->getMessage()]);
        }
    }
    public function register(Request $request)
    {
        $validator = $request->validate([
            'type'      => 'required',
            'username'  => 'required',
            'mobile'    => 'required|unique:users',
            'email'     => 'nullable',
            'password'  => ['required', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()],
            'city'      => 'required',
        ]);
        $user = new User();
        $user->name     = $request->username;
        $user->email    = $request->email;
        $user->type     = $request->type;
        $user->password = Hash::make($request->password);
        $user->mobile   = $request->mobile;
        $user->city_id  = $request->city;
        $user->save();
        $points = new Point();
        $points->user_id = $user->id;
        $points->points = 5;
        $points->grand_total = 5;
        $points->operation = 'new account';
        $points->description_ar = 'حساب جديد';
        $points->description_en = 'new account';
        $points->save();
        Auth::login($user);
        if ($request->type == 'trader') {
            $shop = new Shop();
            $shop->user_id = $user->id;
            $shop->store_name = $user->name;
            $shop->store_Code = '#' . $this->generateCodeNumber('trader');
            $shop->save();
            return redirect(turl('profile'))->with('success', 'Register Successful');
        } else if ($request->type == 'delivery') {
            $delviry = new Delivery();
            $delviry->delivery_name =  $user->name;
            $delviry->user_id  =  $user->id;
            $delviry->delivery_Code =  $this->generateCodeNumber('delivery');
            $delviry->save();
            return redirect(durl(''))->with('success', 'Register Successful');
        } else {
            return redirect(url('user'))->with('success', 'Register Successful');
        }
    }
    public function login(Request $request)
    {
        $validator = $request->validate([
            'mobile'         => 'required',
            'password'      => 'required',
        ]);
        if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
            if (session()->has('previous-url')) {
                return redirect(session('previous-url'))->with('login success');
            } else {
                $user = User::find(Auth::user()->id);
                if ($user->type == 'trader') {
                    return redirect(turl(''))->with('success', 'login Successful');
                } else if ($user->type == 'delivery') {
                    return redirect(durl(''))->with('success', 'login Successful');
                } else {
                    return redirect(url('user'))->with('success', 'login Successful');
                }
            }
        } else {
            return back()->with('faild', 'login faild');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
    function generateCodeNumber($type)
    {
        $number = mt_rand(10000000, 99999999);
        if ($this->barcodeNumberExists($type, $number)) {
            return $this->generateBarcodeNumber();
        }
        return $number;
    }

    function barcodeNumberExists($type, $number)
    {
        if ($type == 'trader') {
            return Shop::where('store_Code', $number)->exists();
        } else {
            return Delivery::where('delivery_Code', $number)->exists();
        }
    }
}
