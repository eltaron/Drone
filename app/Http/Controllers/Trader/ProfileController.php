<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'trader') {
            return view('trader.profile.index');
        }
    }
    public function update(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validate = $request->validate([
                'store_name'    => 'required',
                'logo'          => 'required',
                'address'       => 'nullable',
                'facebook'      => 'nullable',
                'twitter'       => 'nullable',
                'instagram'     => 'nullable',
                'username'      => 'required',
                'mobile'        => 'required',
                'email'         => 'nullable',
                'city'          => 'required',
                'about'         => 'nullable',
            ]);
            $user = User::find(Auth::user()->id);
            $user->name     = $request->username;
            $user->mobile   = $request->mobile;
            $user->email    = $request->email;
            $user->city_id  = $request->city;
            $user->about    = $request->about;
            $user->save();
            $store = Shop::where('user_id', Auth::user()->id)->first();
            $store->store_name = $request->store_name;

            $file = $request->file('logo');
            $fileNameWithExtension = $file->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $imageName = $fileName . '_' . time() . '.' . $extension;
            $mainpath = date("Y-m-d") . '/';
            $path = $file->move(public_path('storage/stores/' . $mainpath), $imageName);
            $store->logo = url('') . '/storage/stores/' . $mainpath . $imageName;

            $store->address = $request->address;
            $store->facebook = $request->facebook;
            $store->twitter = $request->twitter;
            $store->instagram = $request->instagram;
            $store->save();
            return back()->with('success', 'profile updated successful');
        }
    }
}
