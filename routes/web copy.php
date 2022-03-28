<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
/*
Route::get('/', function () {
    return view('demo');
});
Route::get('/TrangChu', function () {
    return view('TrangChu');
});

Route::get('/GioiThieu', function () {
    return view('GioiThieu');
});
Route::get('/LienHe', function () {
    return view('LienHe');
});

Route::get('rp/{name}', function ($name) {
    echo "Xin Chao Them ".$name;
})->whereAlpha('name');

Route::get('op/{name?}', function ($name="demo") {
    echo "Xin Chao Them ".$name;
});
*/ 
/*Route::get('/{name?}', function ($name="demo") {
        return view($name);
});*/
Route::get('/', [MyController::class, 'index']);
Route::get('signUp', [MyController::class, 'signUp']);

/*Route::post('signUp', function (Request $request) {
    $request->flash();
    echo $request->old('firstname');
});*/

/*Route::get('/demo/{age}', function($age){
        return view('demo1');
})->middleware('checkage');

Route::get('/demo/{name}/{pass}', function($login){
    return view('demo2');
})->Middleware('checklogin');*/