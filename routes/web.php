<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
	Session::forget('user');
    return redirect('login');
});

Route::post('/login',[UserController::class, 'login']);
Route::get('/userRegisterForm',[UserController::class, 'userRegister'])->name('user.register');
Route::post('/userStore',[UserController::class, 'userStore'])->name('user.store');


Route::get('/',[ProductController::class, 'index']);
Route::get('/addProduct',[ProductController::class, 'productForm'])->name('addProduct');
Route::post('/addProduct',[ProductController::class, 'store'])->name('product.store');
Route::get('details/{id}',[ProductController::class, 'details'])->name('product.details');
Route::get('search',[ProductController::class, 'search'])->name('product.search');
Route::Post('/addToCart',[ProductController::class, 'addToCart'])->name('product.addToCart');
Route::get('cartList',[ProductController::class, 'cartList'])->name('product.cartList');
Route::get('cartRemove/{id}',[ProductController::class, 'cartRemove'])->name('cart.remove');
Route::get('orderNow',[ProductController::class, 'orderNow'])->name('product.orderNow');

Route::post('orderPlace',[ProductController::class, 'orderPlace'])->name('product.orderPlace');

Route::get('myorders',[ProductController::class, 'myOrders'])->name('product.myOrders');


