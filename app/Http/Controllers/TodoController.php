<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('home', compact('todos'));
    }
    public function store(Request $request) {
        $data = json_decode($request->getContent(),true);
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->status = $data['status'];
        $todo->priority = $data['priority'];
        $todo->date_f = $data['date_f'];
        $todo->save();
        return response()->json(['message' => 'Todo create successfully!'], 201);
    }
}
