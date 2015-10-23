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

Route::get('/fruits', array('as' => 'index', 'uses' => 'Fruits@index'));

Route::get('/fruits/create', array('as'  => 'create', 'uses' => 'Fruits@create'));

Route::post('/fruits', array('as' => 'store', 'uses' => 'Fruits@store'));

Route::get('/fruits/apple', array('as' => 'show', 'uses' => 'Fruits@show'));

Route::get('/fruits/apple/edit', array('as' => 'edit', 'uses' => 'Fruits@edit'));

Route::put('/fruits/apple', array('as' => 'update', 'uses' => 'Fruits@update'));

Route::delete('/fruits/apple', array('as' => 'destroy', 'uses' => 'Fruits@destroy'));
