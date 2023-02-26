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

    //FUNCTION TO DELETE ITEM FROM THE LIST
    public function deleteTask ($id){
        Todolist::where('id','=',$id)->delete();
        return redirect()->back()->with('success');
    }

    //FUNCTION TO UPDATE COMPLETE STATUS
    public function markComplete ($id){
        $todolists = Todolist::find($id);
        $todolists->is_complete=1;
        $todolists->save();
        return redirect('/');
    }

}
