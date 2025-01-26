<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog($slug)
    {
//
//        $products = Product::where('category', $slug)->get();
//        return view('catalog.catalog', compact( 'products'));
    }

}
