<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class BrandFilter extends Component
{
    public $brands;

    public function __construct($products)
    {
        $this->brands = collect($products->pluck('attributes')->toArray())
            ->map(fn($attr) => json_decode($attr, true)['Брeнд'] ?? null)
            ->filter()
            ->unique()
            ->values();
    }

    public function render()
    {
        return view('components.brand-filter');
    }
}
