<section class="container-fluid opened-list">
    @if(count($openedTasks))
        @include('panels.tasks.partials.title_task')
    @endif
    @foreach($openedTasks as $task)
        <ul class="list-group">
            @include('panels.tasks.partials.content_task')
        </ul>
    @endforeach
</section>
