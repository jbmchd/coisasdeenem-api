<?php

use Illuminate\Support\Facades\Route;

Route::get('/buscar-dados-iniciais', 'ConteudoController@buscarDadosIniciais');
Route::get('/', 'ConteudoController@buscar');
Route::post('/', 'ConteudoController@criar');
Route::put('/{id}', 'ConteudoController@atualizar');
Route::delete('/{id}', 'ConteudoController@deletar');
