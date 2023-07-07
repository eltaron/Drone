<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Order;
use App\Models\Product;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'delivery') {
            $ordersCount = Order::whereHas('products', function ($query) {
                $query->wherehas('product', function ($q) {
                    $q->where('shop_id', Auth::user()->store->id);
                });
            })->count();
            $orders = Order::with('user')
                ->whereHas('products', function ($query) {
                    $query->wherehas('product', function ($q) {
                        $q->where('shop_id', Auth::user()->store->id);
                    });
                })
                ->where('status', 'preparation')
                ->withCount('products')
                ->latest()
                ->paginate(7);
            $ordersChart = Order::whereHas('products', function ($query) {
                $query->wherehas('product', function ($q) {
                    $q->where('shop_id', Auth::user()->store->id);
                });
            })->get()
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
            $offers = Product::whereHas('offer')->with('offer', 'image')->where('shop_id', Auth::user()->store->id)->latest()->paginate(7);
            return view('delivery.home.index', [
                'ordersCount' => $ordersCount,
                'products_count' => Product::where('shop_id', Auth::user()->store->id)->count(),
                'offers_count' => Product::whereHas('offer')->where('shop_id', Auth::user()->store->id)->count(),
                'specialist_count' => Product::whereHas('specialist')->where('shop_id', Auth::user()->store->id)->count(),
                'followers_count' => Follow::where('model_id', Auth::user()->id)->where('model', 'User')->count(),
                'orders' => $orders,
                'wallet' => $wallet_main,
                'wallets' => $wallets,
                'ordermcount' => $ordermcount,
                'orderArr' => $orderArr,
                'offers' => $offers,
            ]);
        }
    }
}
