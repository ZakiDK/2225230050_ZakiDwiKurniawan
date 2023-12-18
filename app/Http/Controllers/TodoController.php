<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('todo.index',compact(['todo']));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        Todo::create($request->except(['_token', 'submit']));
        return redirect('/todo');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todo.edit', compact(['todo']));
    }

    public function update($id, Request $request)
    {
        $todo = Todo::find($id);
        $todo->update($request->except(['_token', 'submit']));
        return redirect('/todo');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/todo');
    }

}
