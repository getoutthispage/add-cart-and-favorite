<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function search(Request $request): View
    {
        $query = $request->input('query');

        $products = Product::where(function ($queryBuilder) use ($query) {
            $queryBuilder->whereRaw('LOWER(name) LIKE LOWER(?)', ['%' . $query . '%'])
                ->orWhereRaw("LOWER(attributes->>'Брeнд') LIKE LOWER(?)", ['%' . $query . '%']);
        })
            ->orderByRaw('quantity > 0 DESC')
            ->paginate(12)
            ->appends(['query' => $query]);

        return view('search.results', compact('products', 'query'));
    }

    public function show($id): View
    {
        $product = Product::findOrFail($id);
        $product->image = explode(',', $product->images)[0];
        return view('pages.product', compact('product'));
    }

}
