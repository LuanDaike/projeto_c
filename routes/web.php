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

route::get('/', function () {
  return view('auth.login');
});
Route::get('/MelhorBebida', function () {
    return view('café');
});

route::get('/café', 'App\Http\Controllers\CafeController@helloworld');
route::get('/pedidos', 'App\Http\Controllers\PedidosController@helloworld');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::middleware('auth')->group(function () {
route::resource('user', App\Http\Controllers\UserController::class);
route::resource('product', App\Http\Controllers\ProductController::class);
route::resource('menu', App\Http\Controllers\MenuController::class);
route::resource('menu.product', App\Http\Controllers\MenuProductController::class)
        ->only(['store', 'destroy']);
route::get('/cardapio/{menu}', 'App\Http\Controllers\MenuController@showPublic')->name('menu.public.show');
});
