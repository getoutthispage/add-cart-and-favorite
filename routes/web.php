<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
// HOME PAGE
Route::get('/', [IndexController::class, 'index'])->name('home');
// PRODUCT PAGE
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
// ORDER
Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('submitOrder');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

// CATEGORIES PAGES
Route::get('/categories/{category}', [CategoryController::class, 'renderCats'])
    ->where('category', 'hairdressers|colorists|accessories|consumables');
Route::get('/categories/hairdressers/{subcategory}', function ($subcategory) {
    return (new CategoryController)->renderCats("hairdressers.$subcategory");
});

// CATALOG
Route::get('/catalog/{slug}', [CatalogController::class, 'show'])->name('catalog');

// SEARCH
Route::get('/search', [ProductController::class, 'search'])->name('search');
