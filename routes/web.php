<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Models\Order;
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


Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home')->name('home');

Route::get('/order', [OrderController::class, 'index'])->name('order');

Route::view('/landing', 'landing')->name('landing');
Route::view('/index', 'index')->name('index');
Route::view('/account', 'account')->name('account');
Route::view('/setting', 'setting')->name('setting');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('registervalidate', [UserController::class, 'registervalidate'])->name('registervalidate');
Route::post('loginvalidate', [UserController::class, 'loginvalidate'])->name('loginvalidate');

Route::resource('orders', OrderController::class);

Route::get('/orders_delete/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

