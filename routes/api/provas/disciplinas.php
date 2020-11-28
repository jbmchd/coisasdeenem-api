<?php

use Illuminate\Support\Facades\Route;

Route::get('/buscar-dados-iniciais', 'DisciplinaController@buscarDadosIniciais');
Route::get('/', 'DisciplinaController@buscar');
Route::post('/', 'DisciplinaController@criar');
Route::put('/{id}', 'DisciplinaController@atualizar');
Route::delete('/{id}', 'DisciplinaController@deletar');
