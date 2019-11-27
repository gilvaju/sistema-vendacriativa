@if(count($openedTasks))
    <div class="type-tasks-title">
        <h5>Tarefas abertas</h5>
        <hr>
    </div>
@endif

@foreach($openedTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="row no-gutters">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
