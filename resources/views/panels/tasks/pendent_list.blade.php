@if(count($pendentTasks))
    <div class="type-tasks-title title-task-pendent-list">
        <h5>Tarefas pendentes</h5>
        <hr>
    </div>
@endif

@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group content-task-pendent-list pendent-list">
        <div class="row no-gutters">
            <h5>{{ $task->title }}</h5>
            <p>{{ $task->description }}</p>
            @include('panels.tasks.partials.badgets')
            @include('panels.tasks.partials.task_actions')
        </div>
    </div>
  @endforeach
