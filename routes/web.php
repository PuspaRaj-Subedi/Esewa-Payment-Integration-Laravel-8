<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;

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

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'index'])->name('checkout');
Route::get('/esewa/sucess',[App\Http\Controllers\EsewaController::class,'sucess'])->name('esewa.sucess');
Route::get('/esewa/failure',[App\Http\Controllers\EsewaController::class,'sucess'])->name('esewa.failure');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
