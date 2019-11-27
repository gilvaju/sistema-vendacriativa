<section class="container-fluid production-list">
    @if(count($productionTasks))
        @include('panels.tasks.partials.title_task')
    @endif
    @foreach($productionTasks as $task)
        <ul class="list-group">
            @include('panels.tasks.partials.content_task')
        </ul>
    @endforeach
</section>
