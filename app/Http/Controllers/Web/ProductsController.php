<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('web.products.index');
    }

    public function all()
    {
        return view('web.products.all');
    }

    public function show()
    {
        return view('web.products.details');
    }
}
