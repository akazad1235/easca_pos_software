<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSaleControlelr;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
  //  return view('welcome');
    return view('backend.dashboard');
});

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('sales', ProductController::class);
Route::post('order/send', [OrderController::class, 'store'])->name('order.store');
Route::get('order/invoice/{invoiceId}', [OrderController::class, 'invoice'])->name('order.invoice');


//Route::prefix('users')->name('users.')->group(function(){
//
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
