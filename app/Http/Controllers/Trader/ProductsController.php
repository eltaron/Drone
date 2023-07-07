<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'trader') {
            $products = Product::where('shop_id', Auth::user()->store->id)->orderby('id', 'desc')->latest()->get();
            return view('trader.products.index', [
                'products' => $products,
                'title' => 'Products',
                'offers' => Product::where('shop_id', Auth::user()->store->id)->doesntHave('offer')->orderby('id', 'desc')->latest()->get(),
                'specialists' => Product::where('shop_id', Auth::user()->store->id)->doesntHave('specialist')->orderby('id', 'desc')->latest()->get()
            ]);
        }
    }
    public function offers()
    {
        if (Auth::user()->type == 'trader') {
            $products = Product::where('shop_id', Auth::user()->store->id)->wherehas('offer')->orderby('id', 'desc')->latest()->get();
            return view('trader.products.index', [
                'products' => $products,
                'title' => 'Offers',
                'offers' => Product::where('shop_id', Auth::user()->store->id)->doesntHave('offer')->orderby('id', 'desc')->latest()->get(),
                'specialists' => Product::where('shop_id', Auth::user()->store->id)->doesntHave('specialist')->orderby('id', 'desc')->latest()->get()

            ]);
        }
    }
    public function specialist()
    {
        if (Auth::user()->type == 'trader') {
            $products = Product::where('shop_id', Auth::user()->store->id)->wherehas('specialist')->orderby('id', 'desc')->latest()->get();
            return view('trader.products.index', [
                'products' => $products,
                'title' => 'Special Products',
                'offers' => Product::where('shop_id', Auth::user()->store->id)->doesntHave('offer')->orderby('id', 'desc')->latest()->get(),
                'specialists' => Product::where('shop_id', Auth::user()->store->id)->doesntHave('specialist')->orderby('id', 'desc')->latest()->get()
            ]);
        }
    }
    public function store(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'title'       => 'required',
                'description' => 'nullable',
                'category_id' => 'required',
                'price'       => 'required',
                'images'      => 'required|array',
                'oprice'      => 'nullable',
                'odate'       => 'nullable',
            ]);
            $product = new Product();
            $product->shop_id = Auth::user()->store->id;
            $product->title = $request->title;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->code = '#' . $this->generateCodeNumber();
            $product->save();
            $mainpath = date("Y-m-d") . '/';
            $files = $request->file('images');
            if (isset($files)) {
                foreach ($files as $file) {
                    $fileNameWithExtension = $file->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $imageName = $fileName . '_' . time() . '.' . $extension;
                    $path = $file->move(public_path('storage/products/' . $mainpath), $imageName);
                    $entry = new Image();
                    $entry->filename = $imageName;
                    $entry->url = url('') . '/storage/products/' . $mainpath . $imageName;
                    $entry->model_id = $product->id;
                    $entry->user_id = Auth::user()->id;
                    $entry->model = 'Product';
                    $entry->save();
                }
            }
            if (isset($request->oprice)) {
                $offer = new Offer();
                $offer->product_id  = $product->id;
                $offer->price       = $request->oprice;
                $offer->end_at      = $request->odate;
                $offer->save();
            }
            return back()->with('success', 'Added successfully');
        }
    }
    public function storeoffer(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'product_id'  => 'required',
                'oprice'      => 'required',
                'odate'       => 'required',
            ]);
            $offer = new Offer();
            $offer->product_id  = $request->product_id;
            $offer->price       = $request->oprice;
            $offer->end_at      = $request->odate;
            $offer->save();
            return back()->with('success', 'Added successfully');
        }
    }
    public function storespecial(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'product_id'  => 'required',
                'odate'       => 'required',
            ]);
            $specialist = new Specialist();
            $specialist->product_id  = $request->product_id;
            $specialist->end_at      = $request->odate;
            $specialist->save();
            return back()->with('success', 'Added successfully');
        }
    }
    public function edit(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'title'       => 'required',
                'description' => 'nullable',
                'price'       => 'required',
                'images'      => 'array',
                'oprice'      => 'nullable',
                'product_id'  => 'required',
            ]);
            $product = Product::find($request->product_id);
            $product->title = $request->title;
            $product->description = $request->description;
            if ($request->category_id) {
                $product->category_id = $request->category_id;
            }
            $product->price = $request->price;
            $product->save();
            $mainpath = date("Y-m-d") . '/';
            $files = $request->file('images');
            if (isset($files)) {
                foreach ($files as $file) {
                    $fileNameWithExtension = $file->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $imageName = $fileName . '_' . time() . '.' . $extension;
                    $path = $file->move(public_path('storage/products/' . $mainpath), $imageName);
                    $entry = new Image();
                    $entry->filename = $imageName;
                    $entry->url = url('') . '/storage/products/' . $mainpath . $imageName;
                    $entry->model_id = $product->id;
                    $entry->user_id = Auth::user()->id;
                    $entry->model = 'Product';
                    $entry->save();
                }
            }
            if (isset($request->oprice)) {
                $offer = Offer::where('product_id', $product->id)->first();
                $offer->price       = $request->oprice;
                if ($request->odate) {
                    $offer->end_at      = $request->odate;
                }
                $offer->save();
            }
            return back()->with('success', 'Edit successfully');
        }
    }
    public function destroy(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'product_id'       => 'required',
            ]);
            $product = Product::find($request->product_id);
            $product->delete();
            return back()->with('success', 'Deleted successfulky');
        }
    }
    public function destroyoffer(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'product_id'       => 'required',
            ]);
            $product = Offer::find($request->product_id);
            $product->delete();
            return back()->with('success', 'Deleted successfulky');
        }
    }
    public function destroyspecial(Request $request)
    {
        if (Auth::user()->type == 'trader') {
            $validator = $request->validate([
                'product_id'       => 'required',
            ]);
            $product = Specialist::find($request->product_id);
            $product->delete();
            return back()->with('success', 'Deleted successfulky');
        }
    }
    function generateCodeNumber()
    {
        $number = mt_rand(10000000, 99999999);
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }
        return $number;
    }

    function barcodeNumberExists($number)
    {
        return Product::where('code', $number)->exists();
    }
}
