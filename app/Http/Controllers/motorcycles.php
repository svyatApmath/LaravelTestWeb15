<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class motorcycles extends BaseController
{
    public function index()
	{
		return view('motorcycles.index');
	}

    public function create()
	{
		return view('motorcycles.create');
	}

    public function store()
	{
		return view('motorcycles.store');
	}

    public function show($id)
	{
		return view('motorcycles.show', compact('id'));
	}

    public function edit($id)
	{
		return view('motorcycles.edit', compact('id'));
	}

    public function update($id)
	{
		return view('motorcycles.update', compact('id'));
	}

    public function destroy($id)
	{
		return view('motorcycles.destroy', compact('id'));
	}
}