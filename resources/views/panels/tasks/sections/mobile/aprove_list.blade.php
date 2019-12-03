@if(count($tasks->where('status', array_search('Aprovar', config('sgvc.status')))))
    <section class="container-fluid section-list-group aprove-list">
        @include('panels.tasks.partials.title_task', ['statusGroupTasks' => 'Aprovar', 'countTasks' => count($tasks->where('status', array_search('Aprovar', config('sgvc.status'))))])
        @foreach($tasks->where('status', array_search('Aprovar', config('sgvc.status')))->sortByDesc('delivery_date') as $task)
            <ul class="list-group">
                @include('panels.tasks.partials.mobile.content_task')
            </ul>
        @endforeach
    </section>
@endif

