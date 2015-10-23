<?php namespace App\Http\Controllers;
class Ceacat extends Controller {

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
public function index()
{
    return view('Ceacat.Panel');
}

public function create()
{
    return view('Ceacat.Somebody_new');
}
public function store()
{
    return view('Ceacat.Store');
}
public function show($id)
{
    
    return view('Ceacat.Page1',compact($id));
}
public function edit($id)
{
    return view('Ceacat.Edit',compact($id));
}
public function update($id)
{
    return view('Ceacat.Update',compact($id));
}
public function destroy($id)
{
    return view('Ceacat.Destroy',compact($id));
}
}