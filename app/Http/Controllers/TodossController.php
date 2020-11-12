<?php

namespace App\Http\Controllers;

use App\todoss;
use Illuminate\Http\Request;

class TodossController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(todoss $todoss)
    {
        //
        return view('todoss_show')->with('todossArr',todoss::all());
    }

    
    public function edit(todoss $todoss)
    {
        //
    }

    
    public function update(Request $request, todoss $todoss)
    {
        //
    }

    
    public function destroy(todoss $todoss, $id)
    {
        todoss::destroy(array('id',$id));


        return redirect('todoss_show');
    }
}
