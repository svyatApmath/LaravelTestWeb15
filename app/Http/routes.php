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
    
