<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AreaConhecimentoController@buscar');
Route::post('/', 'AreaConhecimentoController@criar');
Route::put('/{id}', 'AreaConhecimentoController@atualizar');
Route::delete('/{id}', 'AreaConhecimentoController@deletar');
