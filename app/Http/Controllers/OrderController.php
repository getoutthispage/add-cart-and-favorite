<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order; // Необходимо подключить модель Order
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

    public function submitOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'product_id' => 'required|exists:products,id',
        ]);

        // Создание нового заказа в базе данных
        $order = Order::create($request->except('_token'));

        // Получение информации о продукте
        $product = Product::find($request->input('product_id'));
        $metaHref = $product->meta_href ?? null; // Извлечение meta_href из модели продукта
        $salePrice = $product->sale_price ?? null; // Извлечение sale_price из модели продукта
        $salePrice = round($salePrice, 1);

        // Данные для создания контрагента
        $counterpartyData = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
        ];

        // Отправка запроса на создание контрагента
        $client = new Client();
        $response = $client->post('https://api.moysklad.ru/api/remap/1.2/entity/counterparty', [
            'headers' => [
                'Authorization' => 'Bearer ab8edcaafabcd9308789c8f135f7db96ee6b789c',
                'Accept-Encoding' => 'gzip',
                'Content-Type' => 'application/json',
            ],
            'json' => $counterpartyData,
            'verify' => false, // Отключаем проверку SSL
        ]);

        // Получение ответа
        $body = json_decode($response->getBody(), true);

        // Извлечение ссылки из meta.href для контрагента
        $counterpartyHref = $body['meta']['href'] ?? null;

        // Логирование информации о контрагенте и продукте
        Log::info('Counterparty created: ' . $counterpartyHref);
        Log::info('Product meta href: ' . $metaHref); // Логируем meta_href продукта
        Log::info('Product $salePrice href: ' . $salePrice); // Логируем $salePrice продукта

        // Подготовка данных для запроса на создание заказа
        $orderData = [
            'name' => $request->input('name'),
            'organization' => [
                'meta' => [
                    'href' => 'https://api.moysklad.ru/api/remap/1.2/entity/organization/0460e57b-217e-11ee-0a80-08c7002536bd',
                    'type' => 'organization',
                    'mediaType' => 'application/json',
                ],
            ],
            'agent' => [
                'meta' => [
                    'href' => $counterpartyHref,
                    'type' => 'counterparty',
                    'mediaType' => 'application/json',
                ],
            ],
            'positions' => [
                [
                    'quantity' => 1,
                    'price' => $salePrice * 100,
                    'assortment' => [
                        'meta' => [
                            'href' => $metaHref,
                            'type' => 'product',
                            'mediaType' => 'application/json',
                        ],
                    ],
                ],
            ],
        ];

        // Отправка POST-запроса для создания заказа
        $responseOrder = $client->post('https://api.moysklad.ru/api/remap/1.2/entity/customerorder', [
            'headers' => [
                'Authorization' => 'Bearer ab8edcaafabcd9308789c8f135f7db96ee6b789c',
                'Accept-Encoding' => 'gzip',
                'Content-Type' => 'application/json',
            ],
            'json' => $orderData,
            'verify' => false, // Отключаем проверку SSL
        ]);

        // Получение ответа от сервера
        $orderBody = json_decode($responseOrder->getBody(), true);

        // Логируем информацию о созданном заказе
        Log::info('Order created: ' . $orderBody['meta']['href'] ?? 'No href in response');

        // Перенаправление пользователя с сообщением об успехе
        return redirect()->back()->with('success', 'Спасибо! Мы свяжемся с вами в ближайшее время.');
    }

    public function index()
    {
        return view('orders.index'); // Возвращаем представление с заказами
    }

}

