<li class="list-group-item">
    <div class="row d-flex align-items-center">
        <div class="col-12 pl-1">
            <span class="badge client-badge">{{ config('sgvc.clients.'.$task->client_id) }}</span>
            <a href="{{ route('task.edit', $task) }}">
                <h5>{{ $task->title }}</h5>
            </a>
            <p>{{ $task->description }}</p>
            <span class="badge responsible-badge">{{ $task->responsible->name }}</span>
            <span class="badge text-secondary"><i class="fas fa-chevron-right"></i></span>
            <span class="badge delivery-badge">{{ $task->delivery() }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pl-0 mb-0 d-flex justify-content-between">
            <form action="{{ route('task.change', $task->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm text-aprove">
                    <i class="fas fa-arrow-left"></i>
                </button>
            </form>
            <form action="{{ route('task.change', $task->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm text-aprove">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</li>
