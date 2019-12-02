@if(count($tasks->where('status', array_search('Concluída', config('sgvc.status')))))
    <section class="container-fluid section-list-group closed-list">
        @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Concluídas', 'countTasks' => count($tasks->where('status', array_search('Concluída', config('sgvc.status'))))])
        @foreach($tasks->where('status', array_search('Concluída', config('sgvc.status')))->sortByDesc('delivery_date') as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.content_task')
            </ul>
        @endforeach
    </section>
@endif
