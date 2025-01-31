<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Illuminate\Routing\Controller;

class CatalogController extends Controller
{
    protected $slugToPathname = [

        'accessories' => 'INDIGOSHOP/АКСЕССУАРЫ/Аксессуары',
        'brushes' => 'INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Кисти',
        'cups' => 'INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Чашки',
        'caps' => 'INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Шапочки Пелерины',
        'tablets' => 'INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Планшеты, термобумага, весы',
        'all-accessories' => 'INDIGOSHOP/АКСЕССУАРЫ/Аксессуары',
        'clips' => 'INDIGOSHOP/АКСЕССУАРЫ/Зажимы Невидимки для Причесок',
        'rugs' => 'INDIGOSHOP/АКСЕССУАРЫ/Коврики Подставки',
        'mannequins' => 'INDIGOSHOP/АКСЕССУАРЫ/Манекены',
        'bags' => 'INDIGOSHOP/АКСЕССУАРЫ/Сумки Чехлы Кабуры',
        'decorations' => 'INDIGOSHOP/АКСЕССУАРЫ/Украшения',
        'curlers' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Бигуди',
        'Nightgown' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Пеньюары',
        'Hair-dryers' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Фены',
        'Sprayers' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Распылители',
        'brusheshair' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Смётки',
        'aprons' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Фартуки',
        'attachments' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Машинки/Насадки',
        'working-machines' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Машинки/Рабочие Машинки',
        'trimmers' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Машинки/Триммеры',
        'shavers' => 'INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Машинки/Шейверы, Электро-Бритвы',

    ];

    public function show($slug)
    {
        $pathname = $this->slugToPathname[$slug] ?? null;
        $pathSegments = explode('/', $pathname);

        $currentBreadcrumbs = [];
        $url = '';

        foreach ($pathSegments as $segment) {
            $url .= $segment . '/';
            $currentBreadcrumbs[] = [
                'name' => ucfirst($segment),
                'url' => rtrim($url, '/')
            ];
        }
        $title = end($currentBreadcrumbs)['name'];
        $products = Product::where('pathname', $pathname)
            ->orderByRaw('quantity > 0 DESC')
            ->paginate(12);

        $brands = collect($products->pluck('attributes')->toArray())
        ->map(fn($attr) => json_decode($attr, true))
        ->filter(fn($attr) => is_array($attr) && isset($attr['Брeнд']))
        ->map(fn($attr) => $attr['Брeнд'])
        ->unique()
        ->values();

        return view('catalog.catalog', compact('products', 'title', 'currentBreadcrumbs', 'brands'));
    }
}
