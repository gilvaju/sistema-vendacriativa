@if(count($openedTasks))
    <div class="type-tasks-title title-task-opened-list">
        <h5>Tarefas abertas</h5>
        <hr>
    </div>
@endif

@foreach($openedTasks as $task)
    <div class="list-group-item list-task-group content-task-opened-list opened-list">
        <div class="row no-gutters">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
