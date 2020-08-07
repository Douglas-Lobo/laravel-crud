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


//ROTAS DO CRUD DE PRODUTOS
route::prefix('admin')->namespace('Admin')->name('admin.produtos.')->group(function(){
    
    Route::get('/produtos', 'produtosController@listar')->name('index');
    Route::get('/produtos/create', 'produtosController@create')->name('create');
    Route::post('/produtos/create', 'produtosController@store')->name('store');
    

});