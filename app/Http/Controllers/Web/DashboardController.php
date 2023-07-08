<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Follow;
use App\Models\Order;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'user') {
            $ordersCount = Order::where('user_id', Auth::user()->id)->count();
            $orders = Order::with('user')
                ->where('user_id', Auth::user()->id)
                ->where('status', 'preparation')
                ->withCount('products')
                ->latest()
                ->paginate(7);
            $ordersChart = Order::where('user_id', Auth::user()->id)->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->created_at)->format('m'); // grouping by months
                });
            $ordermcount = [];
            $orderArr = [];
            foreach ($ordersChart as $key => $value) {
                $ordermcount[(int)$key] = count($value);
            }
            for ($i = 1; $i <= 12; $i++) {
                if (!empty($ordermcount[$i])) {
                    $orderArr[$i] = $ordermcount[$i];
                } else {
                    $orderArr[$i] = 0;
                }
            }
            $wallet = Wallet::where('user_id', Auth::user()->id)->latest()->first();
            if ($wallet) {
                $wallet_main = $wallet->grand_total;
            } else {
                $wallet_main = 0;
            }
            $wallets = Wallet::where('user_id', Auth::user()->id)->latest()->paginate(7);
            return view('web.dashboard.index', [
                'ordersCount' => $ordersCount,
                'followers_count' => Follow::where('model_id', Auth::user()->id)->where('model', 'User')->count(),
                'orders' => $orders,
                'wallet' => $wallet_main,
                'wallets' => $wallets,
                'ordermcount' => $ordermcount,
                'orderArr' => $orderArr,
            ]);
        }
    }
    public function articles()
    {
        if (Auth::user()->type == 'user') {
            $articles = Article::where('user_id', Auth::user()->id)->latest()->get();
            return view('web.dashboard.articles', ['articles' => $articles]);
        }
    }
    public function followers()
    {
        if (Auth::user()->type == 'user') {
            return view('web.dashboard.followers', [
                'followers' => Follow::where(['model_id' => Auth::user()->id, 'model' => 'User'])->latest()->get()
            ]);
        }
    }
    public function orders()
    {
        if (Auth::user()->type == 'user') {
            $orders = Order::where('user_id', Auth::user()->id)
                ->withCount('products')
                ->with('user')
                ->latest()
                ->get();
            return view('web.dashboard.orders', [
                'orders' => $orders
            ]);
        }
    }
    public function profile()
    {
        if (Auth::user()->type == 'user') {
            return view('web.dashboard.profile');
        }
    }
    public function wallets()
    {
        if (Auth::user()->type == 'user') {
            return view('web.dashboard.wallets', [
                'wallets' => Wallet::where('user_id', Auth::user()->id)->latest()->get(),
                'balance' => wallet::where('user_id', Auth::user()->id)->latest()->first()
            ]);
        }
    }
    public function update(Request $request)
    {
        if (Auth::user()->type == 'user') {
            $validate = $request->validate([
                'username'      => 'required',
                'mobile'        => 'required',
                'email'         => 'nullable',
                'city'          => 'nullable',
                'about'         => 'nullable',
                'logo'          => 'nullable',
            ]);
            $user = User::find(Auth::user()->id);
            $user->name     = $request->username;
            $user->mobile   = $request->mobile;
            $user->email    = $request->email;
            if ($request->city_id) {
                $user->city_id  = $request->city;
            }
            $user->about    = $request->about;

            $file = $request->file('logo');
            if ($file) {
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName . '_' . time() . '.' . $extension;
                $mainpath = date("Y-m-d") . '/';
                $path = $file->move(public_path('storage/stores/' . $mainpath), $imageName);
                $user->profileLogo = url('') . '/storage/stores/' . $mainpath . $imageName;
            }
            $user->save();
            return back()->with('success', 'profile updated successful');
        }
    }
}
