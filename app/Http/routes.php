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

Route::get("games", array('uses' => "GamesController@index", "as" => "games"));
Route::post("games", "GamesController@store");
Route::get("games/create", array('uses' => "GamesController@create", "as" => "games.create"));
Route::get("games/{id}", array('uses' => "GamesController@show", "as" => "games.show"));
Route::post("games/{id}", array('uses' => "GamesController@update", "as" => "games.update"));
Route::delete("games/{id}", array('uses' => "GamesController@destroy", "as" => "games.destroy"));
Route::get("games/{id}/edit", array('uses' => "GamesController@edit", "as" => "games.edit"));