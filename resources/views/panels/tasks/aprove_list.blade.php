@if(count($aproveTasks))
    @include('panels.tasks.partials.title_task')
@endif

@foreach($aproveTasks as $task)
    <div class="container-fluid">
        @include('panels.tasks.partials.content_task')
    </div>
  @endforeach
