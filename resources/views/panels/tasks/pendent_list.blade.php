@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group pendent-list">
        <div class="row">
            <div class="col-12">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <span class="badge badge-primary p-1">{{ $task->responsible->name }}</span>
                <span class="badge badge-secondary p-1">{{ $task->owner->name }}</span>
                <span class="badge badge-danger p-1">{{ config('sgvc.clients.'.$task->client_id) }}</span>
            </div>
        </div>
    </div>
  @endforeach

@if(count($pendentTasks))
    <hr class="divider-list">
@endif
