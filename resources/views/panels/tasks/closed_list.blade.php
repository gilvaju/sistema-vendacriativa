<section class="container-fluid closed-list">
    @if(count($closedTasks))
        @include('panels.tasks.partials.title_task')
    @endif
    @foreach($closedTasks as $task)
        <ul class="list-group">
            @include('panels.tasks.partials.content_task')
        </ul>
    @endforeach
</section>
