<?php

use Illuminate\Support\Facades\Route;

Route::get('/buscar-dados-iniciais', 'MateriaController@buscarDadosIniciais');
Route::get('/', 'MateriaController@buscar');
Route::post('/', 'MateriaController@criar');
Route::put('/{id}', 'MateriaController@atualizar');
Route::delete('/{id}', 'MateriaController@deletar');
