<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{

    //FUNCTION TO LIST NEW ITEM
    public function index()
    {
        $todolists = Todolist::all();
        return view('home', compact('todolists'));
    }

    //FUNCTION TO ADD NEW ITEM INTO THE LIST
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todolist::create($data);
        return back();
    }

    //FUNCTION TO DELETE
    public function deleteTask ($id){
        Todolist::where('id','=',$id)->delete();
        return redirect()->back()->with('success');
    }

}
