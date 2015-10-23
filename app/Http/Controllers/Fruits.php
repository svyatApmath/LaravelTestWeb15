<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

/**
 * Description of Fruits
 *
 * @author artesby
 */
class Fruits extends Controller {
    //put your code here
    public function index()
    {
        return view('fruits.fruits-index' );     
    }
    
    public function create()
    {
        return view('fruits.fruits-create');
    }
    
    public function store()
    {
        return view('fruits.fruits-store');
    }
    
    public function show()
    {
        
        return view('fruits.fruits-show');
    }
    
    public function edit()
    {
        
        return view('fruits.fruits-edit');
    }
    
    public function update()
    {
        return view('fruits.fruits-update');
    }
    
    public function destroy()
    {
        return view('fruits.fruits-destroy');
    }
}
