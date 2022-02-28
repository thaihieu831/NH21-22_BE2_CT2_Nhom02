<?php

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
    return view('demo');
});
Route::get('/intro/{Hieu?}', function ($id="Thai Minh Hieu") {
    echo $id;
});

Route::get('/GioiThieu', function () {
    return view('GioiThieu');
});
Route::get('/LienHe', function () {
    return view('LienHe');
});
