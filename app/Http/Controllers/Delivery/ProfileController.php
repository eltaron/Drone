<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'delivery') {
            return view('delivery.profile.index');
        }
    }
    public function update(Request $request)
    {
        if (Auth::user()->type == 'delivery') {
            $validate = $request->validate([
                'store_name'    => 'required',
                'logo'          => 'nullable',
                'address'       => 'nullable',
                'google'        => 'nullable',
                'facebook'      => 'nullable',
                'twitter'       => 'nullable',
                'instagram'     => 'nullable',
                'username'      => 'required',
                'mobile'        => 'required',
                'email'         => 'nullable',
                'city'          => 'nullable',
                'about'         => 'nullable',
            ]);
            $user = User::find(Auth::user()->id);
            $user->name     = $request->username;
            $user->mobile   = $request->mobile;
            $user->email    = $request->email;
            if ($request->city_id) {
                $user->city_id  = $request->city;
            }
            $user->about    = $request->about;
            $store = Shop::where('user_id', Auth::user()->id)->first();
            $store->store_name = $request->store_name;

            $file = $request->file('logo');
            if ($file) {
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName . '_' . time() . '.' . $extension;
                $mainpath = date("Y-m-d") . '/';
                $path = $file->move(public_path('storage/stores/' . $mainpath), $imageName);
                $store->logo = url('') . '/storage/stores/' . $mainpath . $imageName;
                $user->profileLogo = url('') . '/storage/stores/' . $mainpath . $imageName;
            }
            $store->address = $request->address;
            $store->google = $request->google;
            $store->facebook = $request->facebook;
            $store->twitter = $request->twitter;
            $store->instagram = $request->instagram;
            $store->save();
            $user->save();
            return back()->with('success', 'profile updated successful');
        }
    }
}
