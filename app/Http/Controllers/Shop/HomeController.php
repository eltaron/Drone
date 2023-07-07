<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($storename)
    {
        $store = Shop::where('store_name', $storename)->first();
        if ($store) {
            $specials = Product::inRandomOrder()->whereHas('specialist')->where('shop_id', $store->id)->latest()->paginate(4);
            $offers = Product::inRandomOrder()->whereHas('offer')->where('shop_id', $store->id)->latest()->paginate(4);
            $products = Product::inRandomOrder()->where('shop_id', $store->id)->latest()->paginate(8);
            return view('shop.home.index', [
                'store' => $store,
                'specials' => $specials,
                'offers' => $offers,
                'products' => $products
            ]);
        } else {
            return view('errors.404');
        }
    }
    public function show($storename, $id)
    {
        $store = Shop::where('store_name', $storename)->first();
        if ($store) {
            $product = Product::find($id);
            return view('shop.details.index', [
                'product' => $product,
                'store' => $store
            ]);
        } else {
            return view('errors.404');
        }
    }
    public function products($storename, $type)
    {
        $store = Shop::where('store_name', $storename)->first();
        if ($store) {
            return view('shop.details.index', [
                'store' => $store
            ]);
        } else {
            return view('errors.404');
        }
    }
}
