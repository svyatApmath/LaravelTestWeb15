<?php

Route::get('/', function(){
    return view('welcome');
});


Route::get('countries/',[
    'as'=> 'index',
    'uses'=>'CountriesController@index'
    ]);
Route::get('countries/create',[
    'as' => 'create',
    'uses' => 'CountriesController@create'
    ]);
Route::get('countries/{id}',[
    'as' => 'show',
    'uses' => 'CountriesController@show'
    ]);
Route::post('countries/',[
    'as'=> 'store',
    'uses'=>'CountriesController@store'
    ]);
Route::get('countries/{id}/edit',[
    'as' => 'edit',
    'uses' => 'CountriesController@edit'
    ]);
Route::post('countries/{id}',[
    'as' => 'update',
    'uses' => 'CountriesController@update'
    ]);
Route::delete('countries/{id}',[
    'as' => 'destroy',
    'uses' => 'CountriesController@destroy'
    ]);
-
-
Route::get('/fruits', ['as' => 'fruits.index', 'uses' => 'Fruits@index']);
Route::get('/fruits/create', ['as'  => 'fruits.create', 'uses' => 'Fruits@create']);
Route::post('/fruits', ['as' => 'fruits.store', 'uses' => 'Fruits@store']);
Route::get('/fruits/{fruit}', ['as' => 'fruits.show', 'uses' => 'Fruits@show']);
Route::get('/fruits/{fruit}/edit', ['as' => 'fruits.edit', 'uses' => 'Fruits@edit']);
Route::put('/fruits/{fruit}', ['as' => 'fruits.update', 'uses' => 'Fruits@update']);
Route::delete('/fruits/{fruit}', ['as' => 'fruits.destroy', 'uses' => 'Fruits@destroy']);
-
-
Route::get('Ceacat',[
    'as' => 'ceacat.index', 'uses' => 'Ceacat@index'
]);
Route::get('Ceacat/create',[
    'as' => 'ceacat.create', 'uses' => 'Ceacat@create'
]);
Route::post('Ceacat',[
    'as' => 'ceacat.store', 'uses' => 'Ceacat@store'
]);
Route::get('Ceacat/{id}',[
    'as' => 'ceacat.show', 'uses' => 'Ceacat@show'
]);
Route::get('Ceacat/{id}/edit',[
    'as' => 'ceacat.edit', 'uses' => 'Ceacat@edit'
]);
Route::put('Ceacat/{id}',[
    'as' => 'ceacat.update', 'uses' => 'Ceacat@edit'
]);
Route::delete('Ceacat/{id}',[
    'as' => 'ceacat.destroy' , 'uses' => 'Ceacat@destroy'
]);
-
-
Route::get("games", array('uses' => "GamesController@index", "as" => "games"));
Route::post("games", "GamesController@store");
Route::get("games/create", array('uses' => "GamesController@create", "as" => "games.create"));
Route::get("games/{id}", array('uses' => "GamesController@show", "as" => "games.show"));
Route::post("games/{id}", array('uses' => "GamesController@update", "as" => "games.update"));
Route::delete("games/{id}", array('uses' => "GamesController@destroy", "as" => "games.destroy"));
Route::get("games/{id}/edit", array('uses' => "GamesController@edit", "as" => "games.edit"));
-
-
Route::get('/cars', [
    'as'    => 'index',
    'uses'  => 'CarsController@index'
]);

Route::get('/cars/create', [
    'as'    => 'create',
    'uses'  => 'CarsController@create'
]);

Route::post('/cars', [
    'as'    => 'store',
    'uses'  => 'CarsController@store'
]);

Route::get('/cars/bugatti', [
    'as'    => 'show',
    'uses'  => 'CarsController@show'
]);

Route::get('/cars/bugatti/edit', [
    'as'    => 'edit',
    'uses'  => 'CarsController@edit'
]);

Route::put('/cars/bugatti', [
    'as'    => 'update',
    'uses'  => 'CarsController@update'
]);

Route::delete('/cars/bugatti', [
    'as'    => 'delete',
    'uses'  => 'CarsController@destroy'
]);
