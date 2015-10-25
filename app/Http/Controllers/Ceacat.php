<?php namespace App\Http\Controllers;
class Ceacat extends Controller {

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
public function index()
{
    return view('ceacat.panel');
}

public function create()
{
    return view('ceacat.create');
}
public function store()
{
    return view('ceacat.store');
}
public function show($id)
{
    
    return view('ceacat.show',compact('id'));
}
public function edit($id)
{
    return view('ceacat.edit',compact('id'));
}
public function update($id)
{
    return view('ceacat.update',compact('id'));
}
public function destroy($id)
{
    return view('ceacat.destroy',compact('id'));
}
}