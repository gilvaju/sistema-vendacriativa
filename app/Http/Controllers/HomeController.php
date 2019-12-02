<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;

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
    public function index(Task $task, User $user)
    {
        return view('dashboard')->with('tasks', Task::all())->with('users', $user->all());
    }
}
