<section class="container-fluid section-list-group paused-list">
    @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Pausadas', 'countTasks' => count($tasks->where('status', array_search('Pausadas', config('sgvc.status'))))])
    @foreach($tasks->where('status', array_search('Pausadas', config('sgvc.status')))->sortByDesc('delivery_date') as $task)
        <ul class="list-group">
            @include('panels.tasks.partials.content_task')
        </ul>
    @endforeach
</section>

