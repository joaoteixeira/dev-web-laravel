<?php

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

Route::get('/sobre', function () {
    return view('sobre');
});


Route::resource('/contatos', 'ContatosController');

Route::resource('/categorias', 'CategoriasController');

// Route::get('/lista', 'CategoriasController@listaPorCategoria');
Route::get('/lista', 'CategoriasController@listaPorCategoria')->name('listaPorCategoria');
