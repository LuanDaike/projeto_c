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
  return view('login');
});
Route::get('/MelhorBebida', function () {
    return view('café');
});

route::get('/café', 'App\Http\Controllers\CafeController@helloworld');
route::get('/funcionários', 'App\Http\Controllers\FuncionariosController@helloworld');
route::get('/pedidos', 'App\Http\Controllers\PedidosController@helloworld');
route::get('/produtos', 'App\Http\Controllers\ProdutosController@helloworld');
route::get('/visualizaçãodocardápio', 'App\Http\Controllers\VisualizacaoCardapioController@helloworld');
route::get('/cardápio', 'App\Http\Controllers\CardapioController@helloworld');
route::get('/cadastroempresas', 'App\Http\Controllers\CadastroEmpresaController@helloworld');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('/cardápio', function () {
  return view('cardápio');
});
