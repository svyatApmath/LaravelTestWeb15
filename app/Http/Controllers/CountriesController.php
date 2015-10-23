<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace App\Http\Controllers;

//use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CountriesController extends BaseController{
 
 public function index()
{
     
        return view('Countries/Countries');
    
}
public function create()
{
     
        return view('Countries/Countries_create');
    
}

public function store()
{
    
         return view('Countries/Countries_store');
    
}
public function show()
{
     
         return view('Countries/Countries_show');
   
}public function edit()
{
     
         return view('Countries/Countries_edit');
    
}public function update()
{
     
         return view('Countries/Countries_update');
     
}public function destroy()
{
     
         return view('Countries/Countries_destroy');
     
}
 
 
}