@if(count($aproveTasks))
    @include('panels.tasks.partials.title_task')
@endif

@foreach($aproveTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="row no-gutters">
            @include('panels.tasks.partials.content_task')
        </div>
    </div>
  @endforeach
