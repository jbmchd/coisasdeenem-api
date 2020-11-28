<?php

use Illuminate\Support\Facades\Route;

Route::get('/buscar-dados-iniciais', 'EnsinoController@buscarDadosIniciais');
Route::get('/', 'EnsinoController@buscar');
Route::post('/', 'EnsinoController@criar');
Route::put('/{id}', 'EnsinoController@atualizar');
Route::delete('/{id}', 'EnsinoController@deletar');
