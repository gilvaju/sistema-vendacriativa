@if(count($tasks->where('status', array_search('Pendente', config('sgvc.status')))))
    <section class="container-fluid section-list-group pendent-list">
        @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Pendentes'])
        @foreach($tasks->where('status', array_search('Pendente', config('sgvc.status')))->sortByDesc('delivery_date') as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif
