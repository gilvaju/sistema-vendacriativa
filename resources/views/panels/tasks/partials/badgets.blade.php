<div class="col-8 task-content-item">
    <span class="badge badge-primary p-1">{{ $task->responsible->name }}</span>
    <span class="badge badge-secondary p-1">{{ $task->owner->name }}</span>
    <span class="badge badge-danger p-1">{{ config('sgvc.clients.'.$task->client_id) }}</span>
</div>
