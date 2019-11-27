@if(count($closedTasks))
    <div class="type-tasks-title title-task-closed-list">
        <h5>Tarefas concluídas</h5>
        <hr>
    </div>
@endif

@foreach($closedTasks as $task)
    <div class="list-group-item list-task-group content-task-closed-list closed-list">
        <div class="row no-gutters">
            <h5>{{ $task->title }}</h5>
            <p>{{ $task->description }}</p>
            @include('panels.tasks.partials.badgets')
            @include('panels.tasks.partials.task_actions')
        </div>
    </div>
  @endforeach
