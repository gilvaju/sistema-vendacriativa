<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
     * @param Task $task
     * @param User $user
     * @param Request $request
     * @return Renderable
     */
    public function index(Task $task, User $user, Request $request)
    {
        $tasks = Task::all();

        if (!empty($request->all())) {

            if (!empty($request->client_id)) {
                $tasks = $tasks->where('client_id', $request->client_id);
            }

//            if (!empty($request->status)) {
//                $tasks = $tasks->where('status', $request->status);
//            }

            if (!empty($request->responsible_id)) {
                $tasks = $tasks->where('responsible_id', $request->responsible_id);
            }
//            dd($tasks);

        }
        return view('dashboard')->with('tasks', $tasks)->with('users', $user->all());
    }
}
