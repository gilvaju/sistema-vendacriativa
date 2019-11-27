@if(count($closedTasks))
    <div class="type-tasks-title title-task-closed-list">
        <h5>Tarefas concluídas</h5>
        <hr>
    </div>
@endif

@foreach($closedTasks as $task)
    <div class="list-group-item list-task-group content-task-closed-list closed-list">
        <div class="row no-gutters">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
