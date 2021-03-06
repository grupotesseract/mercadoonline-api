<?php

/*
|--------------------------------------------------------------------------
| Rotas Protegidas (Somente Logado)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:api'])->group(function () {
    Route::resource('usuarios', 'UsuarioAPIController')->except(['destroy', 'create', 'store']);
    Route::get('usuario', 'UsuarioAPIController@showAuthenticated');
});

/*
|--------------------------------------------------------------------------
| Rotas Livres
|--------------------------------------------------------------------------
*/

Route::post('/login', 'UsuarioAPIController@login');
Route::resource('produtos', 'ProdutoAPIController');
Route::resource('pedidos', 'PedidoAPIController');



Route::resource('informacoes', 'ConfiguracaoAPIController');


Route::resource('banners', 'BannerAPIController');