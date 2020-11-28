<?php

use Illuminate\Support\Facades\Route;

Route::get('/buscar-dados-iniciais', 'ProvaController@buscarDadosIniciais');
Route::get('/', 'ProvaController@buscar');
Route::post('/', 'ProvaController@criar');
Route::put('/{id}', 'ProvaController@atualizar');
Route::delete('/{id}', 'ProvaController@deletar');
