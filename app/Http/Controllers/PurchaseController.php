<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function showPurchaseForm(Product $product)
    {
        return view('purchase.form', compact('product'));
    }

    public function storePurchase(Request $request, Product $product)
    {
        $request->validate([
            'phone' => 'required|string|max:15', // Настройте валидацию по вашему усмотрению
        ]);

        // Здесь вы можете сохранить номер телефона в базе данных
        // Например, если у вас есть модель Purchase, вы можете сделать следующее:
        // $purchase = new Purchase();
        // $purchase->product_id = $product->id;
        // $purchase->phone = $request->phone;
        // $purchase->save();

        return redirect()->route('product.show', $product->id)->with('success', 'Ваш заказ принят!');
    }
}
