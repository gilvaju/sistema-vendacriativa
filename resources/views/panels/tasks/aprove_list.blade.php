@if(count($aproveTasks))
    <div class="type-tasks-title">
        <h5>Tarefas em aprovação</h5>
        <hr>
    </div>
@endif

@foreach($aproveTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="row no-gutters">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
