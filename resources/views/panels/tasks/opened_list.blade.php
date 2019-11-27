@if(count($openedTasks))
    <div class="type-tasks-title title-task-opened-list">
        <h5>Tarefas abertas</h5>
        <hr>
    </div>
@endif

@foreach($openedTasks as $task)
    <div class="list-group-item list-task-group content-task-opened-list opened-list">
        <div class="row no-gutters">
            @include('panels.tasks.partials.badgets')
            @include('panels.tasks.partials.task_actions')
        </div>
    </div>
  @endforeach
