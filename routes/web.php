<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
Route::get('/', [MyController::class, 'index']);
/*
Route::post('signup', [MyController::class, 'signup']);
Route::resource('product','ProductController');
Route::get('product',[ProductController::class,'index']);
Route::get('product/create',[ProductController::class,'create']);
Route::post('product',[ProductController::class,'store']);
Route::get('product',[ProductController::class,'show']);
Route::get('product/{id}/edit',[ProductController::class,'edit']);
Route::patch('product/{id}',[ProductController::class,'update']);
Route::delete('product/{id}',[ProductController::class,'destroy']);*/