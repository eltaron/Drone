<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

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
}
