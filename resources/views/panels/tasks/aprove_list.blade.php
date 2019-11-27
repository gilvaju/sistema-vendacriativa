@if(count($aproveTasks))
    <div class="type-tasks-title title-task-aprove-list">
        <h5>Tarefas em aprovação</h5>
        <hr>
    </div>
@endif

@foreach($aproveTasks as $task)
    <div class="list-group-item list-task-group content-task-aprove-list aprove-list">
        <div class="row no-gutters">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
