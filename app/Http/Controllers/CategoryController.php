<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function renderCats(string $category): View
    {
        $products = Product::all();
        return view("categories.$category", compact('products')); // Возврат соответствующего вида
    }

}
