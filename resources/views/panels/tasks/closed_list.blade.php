@if(count($closedTasks))
    @include('panels.tasks.partials.title_task')
@endif

@foreach($closedTasks as $task)
    <div class="container-fluid">
        @include('panels.tasks.partials.content_task')
    </div>
  @endforeach
