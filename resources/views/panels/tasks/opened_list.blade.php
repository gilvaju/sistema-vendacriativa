@if(count($openedTasks))
    @include('panels.tasks.partials.title_task')
@endif

@foreach($openedTasks as $task)
    <div class="container-fluid">
        @include('panels.tasks.partials.content_task')
    </div>
  @endforeach
