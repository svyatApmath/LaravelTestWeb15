<?php namespace App\Http\Controllers;
use App\Whale;
use Request;
use Illuminate\Support\Facades\Input;
class Ceacat extends Controller {

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
public function index()
{
    $whales = Whale::all();
    return view('ceacat.panel',compact('whales'));
}

public function create()
{
    return view('ceacat.create');
}
public function store()
{
    $data = Request::only('id','firstName','lastName','sex');
    $whale = new Whale();
    $whale->identity = $data['id'];
    $whale->firstName = $data['firstName'];
    $whale->lastName = $data['lastName'];
    $whale->Sex = $data['sex'];
    $whale->save();
    
    return redirect('Ceacat');
}
public function show($id)
{
    $object = Whale::find(1);
   
    return $object;
}
public function edit($id)
{
    return view('ceacat.edit')->with('whale',Whale::find($id));
}
public function update()
{
    $new = Request::only('id','firstName','lastName','sex');
    $old = Whale::find($new['id']);
    $old->identity = $new->identity;
    $old->firstName = $new->firstName;
    $old->lastName = $new->lastName;
    $old->Sex = $new->Sex; 
    $old->save();
    return redirect('Ceacat');
}
public function destroy($id)
{
    $whale = Whale::find($id);
    $whale->delete();
    return $whale;
}
}