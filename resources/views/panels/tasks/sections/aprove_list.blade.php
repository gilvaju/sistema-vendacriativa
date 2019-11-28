@if(count($aproveTasks))
    <section class="container-fluid section-list-group aprove-list">
        @include('panels.tasks.partials.title_task')
        @foreach($aproveTasks as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif

