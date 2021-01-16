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


Route::get('/home', 'HomeController@index')->name('home');
route::get('/', function(){
    return view ('auth.login');
});
route::get('/usuarios', 'UsuarioController@index' )->middleware('auth');
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('avaliacao', 'AvaliacaoController@index')->middleware('auth');


Auth::routes();

 
Route::resource('/pedidos', 'PedidosController')->middleware('auth');



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/pratos', 'PratosController')->middleware('auth');
Route::get('pratos/habilitar/{id}', 'PratosController@habilitar')->middleware('auth');
Route::get('pratos/desabilitar/{id}', 'PratosController@desabilitar')->middleware('auth');
Route::get('avaliacao/habilitar/{id}', 'AvaliacaoController@habilitar')->middleware('auth');
Route::get('avaliacao/desabilitar/{id}', 'AvaliacaoController@desabilitar')->middleware('auth');
