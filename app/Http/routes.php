<?php


Route::get('/', function () {
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
