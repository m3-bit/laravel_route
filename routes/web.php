<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/m3-bit', function () {
//     return '<h1>m3-bitだよ</h1>';
// });

Route::get('/m3-bit', function () {
    return view('pages.m3-bit'); // pages/m3-bit でもOK!!
});

Route::get('/user/{name}/{age}', function ($name, $age) {
    return '名前は' .$name. 'で、年齢は' .$age. 'だよ';
});

Route::get('/pages', [PagesController::class, 'index']);