@if(count($closedTasks))
    <section class="container-fluid section-list-group closed-list">
        @include('panels.tasks.partials.title_task')
        @foreach($closedTasks as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif
