<section class="container-fluid aprove-list">
    @if(count($aproveTasks))
        @include('panels.tasks.partials.title_task')
    @endif
    @foreach($aproveTasks as $task)
        <ul class="list-group">
            @include('panels.tasks.partials.content_task')
        </ul>
    @endforeach
</section>
