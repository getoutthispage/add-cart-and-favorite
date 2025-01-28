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
        'all-accessories' => 'INDIGOSHOP/АКСЕССУАРЫ/Аксессуары',
        'clips' => 'INDIGOSHOP/АКСЕССУАРЫ/Зажимы Невидимки для Причесок',
        'rugs' => 'INDIGOSHOP/АКСЕССУАРЫ/Коврики Подставки',
        'mannequins' => 'INDIGOSHOP/АКСЕССУАРЫ/Манекены',
        'bags' => 'INDIGOSHOP/АКСЕССУАРЫ/Сумки Чехлы Кабуры',
        'decorations' => 'INDIGOSHOP/АКСЕССУАРЫ/Украшения',

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
                'name' => ucfirst($segment), // Сделаем первую букву заглавной
                'url' => rtrim($url, '/') // Удаляем последний слеш
            ];
        }
        $title= end($currentBreadcrumbs)['name'];
        $products = Product::where('pathname', $pathname)
            ->orderByRaw('quantity > 0 DESC')
            ->paginate(12);

        return view('catalog.catalog', compact( 'products', 'title', 'currentBreadcrumbs'));
    }
}
