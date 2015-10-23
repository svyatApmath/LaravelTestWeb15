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
Route::get('/', function(){

    return view('welcome');
});
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