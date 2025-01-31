<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\CatalogController;
use App\Http\Middleware\AdminMiddleware;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// ADMIN
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    // Ваши защищенные маршруты
});
//Route::middleware(['auth', AdminMiddleware::class])->group(function () {
//    Route::get('/admin/banners', [BannerController::class, 'index'])->name('admin.banners.index');
//});
//Route::middleware(['auth', 'admin'])->group(function () {
//    Route::get('/admin/banners', [BannerController::class, 'index'])->name('admin.banners.index');
//    Route::get('/admin/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
//    Route::post('/admin/banners', [BannerController::class, 'store'])->name('admin.banners.store');
//    Route::get('/admin/banners/{banner}/edit', [BannerController::class, 'edit'])->name('admin.banners.edit');
//    Route::put('/admin/banners/{banner}', [BannerController::class, 'update'])->name('admin.banners.update');
//    Route::delete('/admin/banners/{banner}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');
//});
