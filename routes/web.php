<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LineItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::post('/line_item/create', [LineItemController::class, 'create'])->name('line_item.create');

Route::post('/line_item/delete', [LineItemController::class, 'delete'])->name('line_item.delete');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
