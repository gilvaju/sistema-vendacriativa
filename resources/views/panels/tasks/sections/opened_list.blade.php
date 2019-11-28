@if(count($openedTasks))
    <section class="container-fluid section-list-group opened-list">
        @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Abertas'])
        @foreach($openedTasks as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif

