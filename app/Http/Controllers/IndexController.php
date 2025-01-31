<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Product::all();
        $banners = Banner::all();
        return view('pages.index', compact('products', 'banners'));
    }
}
