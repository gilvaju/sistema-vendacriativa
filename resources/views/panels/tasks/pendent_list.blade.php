@if(count($pendentTasks))
    <div class="type-tasks-title title-task-pendent-list">
        <h5>Tarefas pendentes</h5>
        <hr>
    </div>
@endif

@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group content-task-pendent-list pendent-list">
        <div class="container-fluid">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
