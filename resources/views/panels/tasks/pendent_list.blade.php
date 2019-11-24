@if(count($pendentTasks))
    <div class="type-tasks-title">
        <h5>Tarefas pendentes</h5>
        <hr>
    </div>
@endif

@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group pendent-list">
        <div class="row no-gutters">
            <div class="col-10 task-content-item">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <span class="badge badge-primary p-1">{{ $task->responsible->name }}</span>
                <span class="badge badge-secondary p-1">{{ $task->owner->name }}</span>
                <span class="badge badge-danger p-1">{{ config('sgvc.clients.'.$task->client_id) }}</span>
            </div>
            @include('panels.tasks.partials.task_actions')
        </div>
    </div>
  @endforeach

@if(count($pendentTasks))
    <hr class="divider-list">
@endif
