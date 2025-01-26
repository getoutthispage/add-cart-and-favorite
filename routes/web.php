<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CatalogController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/{slug}', [CatalogController::class, 'catalog'])->name('catalog');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/categories/all-for-hairdressers', [CategoryController::class, 'allForHairdressers'])->name('categories.hairdressers');
Route::get('/categories/all-for-colorists', [CategoryController::class, 'allForColorists'])->name('categories.colorists');
Route::get('/categories/accessories', [CategoryController::class, 'accessories'])->name('categories.accessories');
Route::get('/categories/consumables', [CategoryController::class, 'consumables'])->name('categories.consumables');

Route::get('/categories/all-for-hairdressers/working-machines', [CategoryController::class, 'hairdressersMachines'])->name('categories.hairdressers.machines');

Route::get('accessories/clamps', [ProductController::class, 'showClamps'])->name('clamps');
Route::get('accessories/accessories', [ProductController::class, 'showAccessories'])->name('Accessories2');
Route::get('accessories/rugs', [ProductController::class, 'showRugs'])->name('rugs');
Route::get('accessories/mannequins', [ProductController::class, 'showMannequins'])->name('mannequins');
Route::get('accessories/bags', [ProductController::class, 'showBags'])->name('bags');
Route::get('accessories/decorations', [ProductController::class, 'showDecorations'])->name('decorations');
Route::get('colorist/accessories', [ProductController::class, 'showColoristAccessories'])->name('ColoristAccessories');
Route::get('colorist/brushes', [ProductController::class, 'showbrushes'])->name('brushes');
Route::get('colorist/tablets', [ProductController::class, 'showtablets'])->name('tablets');
Route::get('colorist/cups', [ProductController::class, 'showcups'])->name('cups');
Route::get('all-for-hairdressers/curlers', [ProductController::class, 'showcurlers'])->name('curlers');

Route::get('/categories/all-for-hairdressers/scissors', [CategoryController::class, 'hairdressersScissors'])->name('categories.hairdressers.scissors');
Route::get('/categories/all-for-hairdressers/Curling-Irons-Straighteners', [CategoryController::class, 'hairdressersCurlingIronsStraighteners'])->name('categories.hairdressers.CurlingIronsStraighteners');
Route::get('/categories/all-for-hairdressers/combs', [CategoryController::class, 'hairdressersСombs'])->name('categories.hairdressers.combs');

Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('submitOrder');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
