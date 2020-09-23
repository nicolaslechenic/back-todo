<?php

namespace App\Http\Controllers;

use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index() {
        return response()->json(
            [
            "data" => 
                TodoList::orderBy('created_at', 'DESC')->get()
            ]
        );
    }
}
