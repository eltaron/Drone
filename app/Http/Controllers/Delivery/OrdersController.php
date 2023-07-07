<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'delivery') {
            $orders = Order::whereHas('products', function ($query) {
                $query->wherehas('product', function ($q) {
                    $q->where('shop_id', Auth::user()->store->id);
                });
            })
                ->withCount('products')
                ->with('user')
                ->latest()
                ->get();
            return view('delivery.orders.index', [
                'orders' => $orders
            ]);
        }
    }
    public function destroy(Request $request)
    {
        if (Auth::user()->type == 'delivery') {
            $validator = $request->validate([
                'order_id'       => 'required',
            ]);
            $order = Order::find($request->order_id);
            $order->delete();
            return back()->with('success', 'Deleted successfulky');
        }
    }
    public function status(Request $request)
    {
        if (Auth::user()->type == 'delivery') {
            $validator = $request->validate([
                'order_id'       => 'required',
                'status'         => 'required',
            ]);
            $order = Order::find($request->order_id);
            $order->status = $request->status;
            $order->save();
            return back()->with('success', 'Updated successfulky');
        }
    }
}
