@if(count($productionTasks))
    <div class="type-tasks-title title-task-production-list">
        <h5>Tarefas em produção</h5>
        <hr>
    </div>
@endif

@foreach($productionTasks as $task)
    <div class="list-group-item list-task-group content-task-production-list production-list">
        <div class="row no-gutters">
            <h5>{{ $task->title }}</h5>
            <p>{{ $task->description }}</p>
            @include('panels.tasks.partials.badgets')
            @include('panels.tasks.partials.task_actions')
        </div>
    </div>
  @endforeach
