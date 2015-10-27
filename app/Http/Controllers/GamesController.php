<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class GamesController extends Controller
{

	public function index()
	{
		return view("games.gamesIndex");
	}

	public function create()
	{
		return view("games.gamesCreate");
	}

	public function store()
	{
		return view("games.gamesStore");
	}

	public function show($id)
	{
		return view("games.gamesShow", compact("id"));
	}

	public function edit($id)
	{
		return view("games.gamesEdit", compact("id"));
	}

	public function update($id)
	{
		return view("games.gamesUpdate", compact("id"));
	}

	public function destroy($id)
	{
		return view("games.gamesDestroy", compact("id"));
	}

}
