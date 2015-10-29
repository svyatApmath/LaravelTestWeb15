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


Route::get('/fruits', ['as' => 'fruits.index', 'uses' => 'Fruits@index']);
Route::get('/fruits/create', ['as'  => 'fruits.create', 'uses' => 'Fruits@create']);
Route::post('/fruits', ['as' => 'fruits.store', 'uses' => 'Fruits@store']);
Route::get('/fruits/{fruit}', ['as' => 'fruits.show', 'uses' => 'Fruits@show']);
Route::get('/fruits/{fruit}/edit', ['as' => 'fruits.edit', 'uses' => 'Fruits@edit']);
Route::put('/fruits/{fruit}', ['as' => 'fruits.update', 'uses' => 'Fruits@update']);
Route::delete('/fruits/{fruit}', ['as' => 'fruits.destroy', 'uses' => 'Fruits@destroy']);


Route::get('whale',[
    'as' => 'whale.index', 'uses' => 'Whales@index'
]);
Route::get('whale/create',[
    'as' => 'whale.create', 'uses' => 'Whales@create'
]);
Route::post('whale',[
    'as' => 'whale.store', 'uses' => 'Whales@store'
]);
Route::get('whale/{id}',[
    'as' => 'whale.show', 'uses' => 'Whales@show'
]);
Route::get('whale/{id}/edit',[
    'as' => 'whale.edit', 'uses' => 'Whales@edit'
]);

Route::put('whale/{id}',[
    'as' => 'whale.update', 'uses' => 'Whales@update'
]);
Route::delete('whale/{id}',[
    'as' => 'whale.destroy' , 'uses' => 'Whales@destroy',

]);

Route::get("games", array('uses' => "GamesController@index", "as" => "games"));
Route::post("games", "GamesController@store");
Route::get("games/create", array('uses' => "GamesController@create", "as" => "games.create"));
Route::get("games/{id}", array('uses' => "GamesController@show", "as" => "games.show"));
Route::post("games/{id}", array('uses' => "GamesController@update", "as" => "games.update"));
Route::delete("games/{id}", array('uses' => "GamesController@destroy", "as" => "games.destroy"));
Route::get("games/{id}/edit", array('uses' => "GamesController@edit", "as" => "games.edit"));
