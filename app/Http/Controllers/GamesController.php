<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class GamesController extends Controller
{

	public function index()
	{
		return view("games.index");
	}

	public function create()
	{
		return view("games.create");
	}

	public function store()
	{
		return view("games.store");
	}

	public function show($id)
	{
		return view("games.show", compact("id"));
	}

	public function edit($id)
	{
		return view("games.edit", compact("id"));
	}

	public function update($id)
	{
		return view("games.update", compact("id"));
	}

	public function destroy($id)
	{
		return view("games.destroy", compact("id"));
	}

}
