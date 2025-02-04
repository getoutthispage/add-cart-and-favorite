<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
// HOME PAGE
Route::get('/', [IndexController::class, 'index'])->name('home');

// PRODUCT PAGE
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

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
// AUTH
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
