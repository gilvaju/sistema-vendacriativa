<section class="container-fluid pendent-list">
    @if(count($pendentTasks))
        @include('panels.tasks.partials.title_task')
    @endif
    @foreach($pendentTasks as $task)
        <ul class="list-group">
            @include('panels.tasks.partials.content_task')
        </ul>
    @endforeach
</section>
