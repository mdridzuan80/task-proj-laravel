<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //

    public function index()
    {
      $tasks = Task::get();
      return view('task.index', compact('tasks'));
    }
}
