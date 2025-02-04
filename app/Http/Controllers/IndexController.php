<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('pages.index', compact('products'));
    }
}
