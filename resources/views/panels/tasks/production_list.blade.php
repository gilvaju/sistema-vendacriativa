@if(count($productionTasks))
    @include('panels.tasks.partials.title_task')
@endif

@foreach($productionTasks as $task)
    <div class="container-fluid">
        @include('panels.tasks.partials.content_task')
    </div>
  @endforeach
