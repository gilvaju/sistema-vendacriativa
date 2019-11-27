@if(count($pendentTasks))
    <div class="type-tasks-title">
        <h5>Tarefas pendentes</h5>
        <hr>
    </div>
@endif

@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="container-fluid">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
