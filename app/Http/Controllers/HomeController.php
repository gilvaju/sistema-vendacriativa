<?php

namespace App\Http\Controllers;

use App\Task;

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
        $idStatusOpened = array_search('Aberta', config('sgvc.status'));
        $idStatusClosed = array_search('Concluída', config('sgvc.status'));
        return view('dashboard')
            ->with('openedTasks', $task->where('status', $idStatusOpened)->get())
            ->with('closedTasks', $task->where('status', $idStatusClosed)->get());
    }
}
