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
    return view('welcome');
})->middleware(['auth.shopify'])->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/favoritos', function () {
    return view('favoritos');
})->middleware(['auth.shopify'])->name('favoritos');

Route::group(['prefix' => '/usuario'], function () {
    Route::get('/', 'App\Http\Controllers\UsuarioController@indexDeliveryController@login');
    Route::post('/cadastrar', 'App\Http\Controllers\UsuarioController@create');
    Route::post('/logar', 'App\Http\Controllers\UsuarioController@logar');
});

Route::get('/cadastro', function () {
    return view('cadastro');
})->middleware(['auth.shopify'])->name('cadastro');
