@if(count($pendentTasks))
    <section class="container-fluid section-list-group pendent-list">
        @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Pendentes'])
        @foreach($pendentTasks as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif
