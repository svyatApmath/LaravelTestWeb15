<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

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
Route::get('countries/1',[
    'as' => 'show',
    'uses' => 'CountriesController@show'
    ]);

Route::post('countries/',[
    'as'=> 'store',
    'uses'=>'CountriesController@store'
    ]);
 
 
Route::get('countries/1/edit',[
    'as' => 'edit',
    'uses' => 'CountriesController@edit'
    ]);
Route::post('countries/1',[
    'as' => 'update',
    'uses' => 'CountriesController@update'
    ]);
Route::delete('countries/1',[
    'as' => 'destroy',
    'uses' => 'CountriesController@destroy'
    ]);
    
