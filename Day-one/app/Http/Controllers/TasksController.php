<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view('tasks.index');
    }
    public  function create () {
        return view('tasks.create');
    }
}
