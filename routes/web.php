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
    return redirect('home');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('usuarios', 'UsuarioController');
});

Route::get('/estados/{id}/cidades', 'CidadeController@getPorEstado');

Route::resource('produtos', 'ProdutoController');
Route::resource('pedidos', 'PedidoController');
Route::resource('produtos_pedido', 'ProdutosPedidoController');

//Importação de produtos
Route::get('importar-produtos', 'ProdutoController@getImportarProdutos')->name('importar-produtos');
Route::post('importar-produtos', 'ProdutoController@postImportarProdutos')->name('produtos.importar');
Route::get('exemplo-importacao', 'ProdutoController@downloadExemploImportacao')->name('exemplo-importacao');

Route::patch('produtos/{id}/disponibilidade', 'ProdutoController@postDisponibilidade')->name('produtos.disponibilidade');
