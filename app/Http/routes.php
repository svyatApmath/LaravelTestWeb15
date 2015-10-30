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