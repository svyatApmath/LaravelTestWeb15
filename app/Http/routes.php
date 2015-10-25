<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fruits', ['as' => 'fruits.index', 'uses' => 'Fruits@index']);

Route::get('/fruits/create', ['as'  => 'fruits.create', 'uses' => 'Fruits@create']);

Route::post('/fruits', ['as' => 'fruits.store', 'uses' => 'Fruits@store']);

Route::get('/fruits/{fruit}', ['as' => 'fruits.show', 'uses' => 'Fruits@show']);

Route::get('/fruits/{fruit}/edit', ['as' => 'fruits.edit', 'uses' => 'Fruits@edit']);

Route::put('/fruits/{fruit}', ['as' => 'fruits.update', 'uses' => 'Fruits@update']);

Route::delete('/fruits/{fruit}', ['as' => 'fruits.destroy', 'uses' => 'Fruits@destroy']);
