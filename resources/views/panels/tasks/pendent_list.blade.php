@if(count($pendentTasks))
    @include('panels.tasks.partials.title_task')
@endif

@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="container-fluid">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
