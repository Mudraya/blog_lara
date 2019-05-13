<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
    $tasks = App\Task::incompleted();
    return view('tasks.index', compact('tasks'));
    }

    public function show($id) {
    $task = App\Task::find($id);
    return view('tasks.show', compact('task'));
    }
}
