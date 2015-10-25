<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Fruits extends Controller
{
    public function index()
    {
        return view('fruits.index' );
    }
    
    public function create()
    {
        return view('fruits.create');
    }
    
    public function store()
    {
        return view('fruits.store');
    }
    
    public function show()
    {
        
        return view('fruits.show');
    }
    
    public function edit()
    {
        
        return view('fruits.edit');
    }
    
    public function update()
    {
        return view('fruits.update');
    }
    
    public function destroy()
    {
        return view('fruits.destroy');
    }
}
