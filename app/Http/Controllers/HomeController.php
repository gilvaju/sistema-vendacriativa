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
        $idStatusOpened = array_search('Aberta', config('sgvc.status'));
        $idStatusPendent = array_search('Pendente', config('sgvc.status'));
        $idStatusAprove = array_search('Aprovar', config('sgvc.status'));
        $idStatusProduction = array_search('Produção', config('sgvc.status'));
        $idStatusClosed = array_search('Concluída', config('sgvc.status'));

        return view('dashboard')
            ->with('openedTasks', $task->where('status', $idStatusOpened)->orderBy('delivery_date', 'DESC')->get())
            ->with('pendentTasks', $task->where('status', $idStatusPendent)->orderBy('delivery_date', 'DESC')->get())
            ->with('aproveTasks', $task->where('status', $idStatusAprove)->orderBy('delivery_date', 'DESC')->get())
            ->with('productionTasks', $task->where('status', $idStatusProduction)->orderBy('delivery_date', 'DESC')->get())
            ->with('closedTasks', $task->where('status', $idStatusClosed)->orderBy('delivery_date', 'DESC')->get())
            ->with('users', $user->all());
    }
}
