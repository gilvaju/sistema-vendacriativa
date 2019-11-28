<li class="list-group-item">
    <div class="row d-flex align-items-center">
        <div class="col-8 pl-1 pr-0">
            <span class="badge client-badge">{{ config('sgvc.clients.'.$task->client_id) }}</span>
            <a href="{{ route('task.edit', $task) }}">
                <h5>{{ $task->title }}</h5>
            </a>
            <p>{{ $task->description }}</p>
            <span class="badge responsible-badge">{{ $task->responsible->name }}</span>
            <span class="badge text-secondary"><i class="fas fa-chevron-right"></i></span>
            <span class="badge delivery-badge">{{ $task->delivery }}</span>
        </div>
        <div class="col-4 pl-0 pr-0">
            @include('panels.tasks.partials.task_actions')
        </div>
    </div>
</li>
