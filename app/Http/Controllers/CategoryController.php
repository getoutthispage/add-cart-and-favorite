<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function renderCats(string $category)
    {
        $products = Product::all();
        return view("categories.$category", compact('products')); // Возврат соответствующего вида
    }

}
