<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Необходимо подключить модель Order

class OrderController extends Controller
{

    public function submitOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'product_id' => 'required|exists:products,id',
        ]);

        Order::create($request->except('_token')); // Исключаем _token из данных

        return redirect()->back()->with('success', 'Спасибо! Мы свяжемся с вами в ближайшее время.');
    }
    public function index()
    {

        return view('orders.index'); // Возвращаем представление с заказами
    }
}

