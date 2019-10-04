<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Task $task)
    {
        $tasks = $task->all();
        return view('dashboard', compact('tasks', 'tasks'));
    }
}
