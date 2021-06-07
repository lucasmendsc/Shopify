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
    return view('index');
})->middleware(['auth.shopify'])->name('favoritos');

Route::get('/cadastro', function () {
    return view('cadastro');
});

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
    Route::get('/deslogar', 'App\Http\Controllers\UsuarioController@deslogar');
});

Route::group(['prefix' => '/produtos'], function () {
    Route::post('/favoritar', 'App\Http\Controllers\ProdutoController@create');
});
