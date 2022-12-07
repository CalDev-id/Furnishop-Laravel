<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [MenuController::class, 'index']);

Route::get('/login', [MenuController::class, 'login'])->name('login')->middleware('guest');

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');

Route::get('/products/{product}', [MenuController::class, 'show']);

Route::post('/signup', [RegisterController::class, 'create']);

Route::post('/login', [RegisterController::class, 'login']);

Route::post('/logout', [RegisterController::class, 'logout']);

Route::get('/dashboard', [MenuController::class, 'dashboard'])->middleware('auth');

Route::get('/dashboard/pembelian', [MenuController::class, 'dbPembelian'])->middleware('auth');

Route::delete('/dashboard/{product}', [MenuController::class, 'pDelete'])->middleware('auth');

Route::get('/dashboard/product/create', [MenuController::class, 'create'])->middleware('auth');

Route::post('/dashboard/product', [MenuController::class, 'store'])->middleware('auth');

Route::post('/product/beli', [MenuController::class, 'beli'])->middleware('auth');

Route::get('/dashboard/edit/{product}', [MenuController::class, 'edit'])->middleware('auth');

Route::put('/dashboard/edit/{product}', [MenuController::class, 'update'])->middleware('auth');


