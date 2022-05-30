<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
Route::get('/index', [ProductController::class, 'index']);
//hien thi chi tiet san pham
Route::get('/detail/{product_id}', [ProductController::class, 'detail_product'])->name('product_detail');

//hien thi san pham theo danh muc
Route::get('/store/{type_id}', [ProductController::class, 'category_product'])->name('category_product');

//dang nhap
Route::get('/login', [UserController::class, 'showLogin'])->name('showLogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/', [ProductController::class, 'index'])->name('showHome');

//dang ky
Route::get('/register', [UserController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [UserController::class, 'register'])->name('register');

//admin
Route::get('/admin.product', [AdminController::class, 'showProduct'])->name('showProduct');
Route::get('/admin.protype', [AdminController::class, 'showProtype'])->name('showProtype');
Route::get('/admin.manufacture', [AdminController::class, 'showManu'])->name('showManu');
Route::get('/admin.user', [AdminController::class, 'showUser'])->name('showUser');
Route::get('/admin.sale', [AdminController::class, 'showSale'])->name('showSale');
Route::get('/admin.order', [AdminController::class, 'showOrder'])->name('showOrder');
Route::get('/admin.cart', [AdminController::class, 'showCart'])->name('showCart');
Route::get('/admin.wishlist', [AdminController::class, 'showWish'])->name('showWish');
Route::get('/admin.wishlist', [AdminController::class, 'showWish'])->name('showWish');

//product
Route::get('/ShowAddProduct', [AdminController::class, 'ShowAddProduct'])->name('ShowAddProduct');
Route::get('/ShowEditProduct/{product_id}', [AdminController::class, 'ShowEditProduct'])->name('ShowEditProduct');
Route::post('/addProduct', [AdminController::class, 'addProduct'])->name('addProduct');
Route::get('/deleteProduct/{product_id}', [AdminController::class, 'deleteProduct'])->name('deleteProduct');
Route::post('/editProduct/{product_id}', [AdminController::class, 'editProduct'])->name('editProduct');

//lien ket chuyen trang
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});