<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Task $tasks)
    {
        // dd($tasks->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Task $task)
    {
        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'delivery_date' => ['required'],
            'owner_id' => ['required'],
            'responsible_id' => ['required'],
            'client_id' => ['required']
        ]);

        $task->create($request->all());
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Task $task
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task, User $user)
    {
        return view('task-view')
            ->with('task', $task)
            ->with('users', $user->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'delivery_date' => ['required'],
            'owner_id' => ['required'],
            'responsible_id' => ['required'],
            'client_id' => ['required']
        ]);

        $task->fill($request->all())->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/home');
    }

    /**
     * Opened task.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function opened(Request $request, Task $task)
    {
        $task->status = array_search('Aberta', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }

    /**
     * Aprove task.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function completed(Request $request, Task $task)
    {
        $task->status = array_search('Concluída', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }

    /**
     * Aprove task.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function aprove(Request $request, Task $task)
    {
        $task->status = array_search('Aprovar', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }

    /**
     * Production task.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function production(Request $request, Task $task)
    {
        $task->status = array_search('Produção', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }

    /**
     * Pendent task.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function pendent(Request $request, Task $task)
    {
        $task->status = array_search('Pendente', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }

    public function change(Request $request, Task $task)
    {
        $task->status = array_search('Pendente', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }
}
