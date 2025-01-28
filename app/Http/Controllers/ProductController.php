<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(12); // Получить товары с пагинацией
        return view('products.index', compact('products')); // Передать данные в представление
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Выполните поиск по названию товара
        $products = Product::whereRaw('LOWER(name) LIKE LOWER(?)', ['%' . $query . '%'])
            ->orderByRaw('quantity > 0 DESC')
            ->paginate(12);



        // Верните результаты в представление
        return view('search.results', compact('products', 'query'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $product->image = explode(',', $product->images)[0];
        return view('pages.product', compact('product'));
    }

    private function getProductsAndBreadcrumbs($pathname, $title, $category = null, Request $request)
    {
        // Формируем хлебные крошки
        $currentBreadcrumbs = [
            [
                'name' => 'Главная',
                'url' => route('home') // Предполагается, что у вас есть маршрут с именем 'home'
            ]
        ];

        if ($category) {
            $currentBreadcrumbs[] = [
                'name' => $category,
                'url' => null // URL можно добавить, если он нужен
            ];
        }

        $currentBreadcrumbs[] = [
            'name' => $title,
            'url' => null // Нет URL, так как это текущая страница
        ];

        // Получение продуктов с учетом текущей страницы
        $products = Product::where('pathname', $pathname)->paginate(12)->appends($request->except('page'));

        return compact('products', 'title', 'currentBreadcrumbs');
    }

    public function showAccessories(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/АКСЕССУАРЫ/Аксессуары', 'Аксессуары', 'Аксессуары', $request);
        return view('catalog.catalog', $data);
    }

    public function showClamps(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/АКСЕССУАРЫ/Зажимы Невидимки для Причесок', 'Зажимы Невидимки для Причесок', 'Аксессуары', $request);
        return view('catalog.catalog', $data);
    }

    public function showRugs(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/АКСЕССУАРЫ/Коврики Подставки', 'Коврики Подставки', 'Аксессуары', $request);
        return view('catalog.catalog', $data);
    }

    public function showMannequins(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/АКСЕССУАРЫ/Манекены', 'Манекены', 'Аксессуары', $request);
        return view('catalog.catalog', $data);
    }

    public function showBags(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/АКСЕССУАРЫ/Сумки Чехлы Кабуры', 'Сумки Чехлы Кабуры', 'Аксессуары', $request);
        return view('catalog.catalog', $data);
    }

    public function showDecorations(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/АКСЕССУАРЫ/Украшения', 'Украшения', 'Аксессуары', $request);
        return view('catalog.catalog', $data);
    }

    public function showColoristAccessories(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Аксессуары', 'Аксессуары', 'ВСЕ ДЛЯ КОЛОРИСТОВ', $request);
        return view('catalog.catalog', $data);
    }

    public function showBrushes(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Кисти', 'Кисти', 'ВСЕ ДЛЯ КОЛОРИСТОВ', $request);
        return view('catalog.catalog', $data);
    }

    public function showTablets(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Планшеты, термобумага, весы', 'Планшеты, термобумага, весы', 'ВСЕ ДЛЯ КОЛОРИСТОВ', $request);
        return view('catalog.catalog', $data);
    }

    public function showCups(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Чашки', 'Чашки', 'ВСЕ ДЛЯ КОЛОРИСТОВ', $request);
        return view('catalog.catalog', $data);
    }

    public function showCaps(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/ВСЕ ДЛЯ КОЛОРИСТОВ/Шапочки Пелерины', 'Шапочки Пелерины', 'ВСЕ ДЛЯ КОЛОРИСТОВ', $request);
        return view('catalog.catalog', $data);
    }

    public function showCurlers(Request $request)
    {
        $data = $this->getProductsAndBreadcrumbs('INDIGOSHOP/ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ/Шапочки Пелерины', 'Бигуди', 'ВСЕ ДЛЯ ПАРИКМАХЕРОВ И БАРБЕРОВ', $request);
        return view('catalog.catalog', $data);
    }
}
