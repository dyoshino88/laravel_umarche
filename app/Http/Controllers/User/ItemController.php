<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.index', compact('products'));
    }
}
