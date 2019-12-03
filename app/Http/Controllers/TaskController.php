<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Task $tasks
     * @return void
     */
    public function index(Task $tasks)
    {
        // dd($tasks->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
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
     * @param Task $task
     * @return void
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @param User $user
     * @return Factory|View
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
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
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
     * @param Task $task
     * @return RedirectResponse|Redirector
     * @throws \Exception
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/home');
    }

    /**
     * Opened task.
     *
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
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
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
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
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
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
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
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
     * @param Request $request
     * @param Task $task
     * @return RedirectResponse|Redirector
     */
    public function pendent(Request $request, Task $task)
    {
        $task->status = array_search('Pendente', config('sgvc.status'));
        $task->save();
        return redirect('/home');
    }

    public function change(Request $request, Task $task)
    {
        $task->fill($request->all())->save();
        return redirect('/home');
    }
}
