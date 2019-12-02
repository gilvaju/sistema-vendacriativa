@if(count($tasks->where('status', array_search('Aberta', config('sgvc.status')))))
    <section class="container-fluid section-list-group opened-list">
        @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Abertas', 'countTasks' => count($tasks->where('status', array_search('Aberta', config('sgvc.status'))))])
        @foreach($tasks->where('status', array_search('Aberta', config('sgvc.status')))->sortByDesc('delivery_date') as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif

