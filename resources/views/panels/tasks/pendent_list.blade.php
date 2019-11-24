@foreach($pendentTasks as $task)
    <div class="list-group-item list-task-group pendent-list">
        <div class="row">
            <div class="col-8">
                <h3 class="mb-0">{{ $task->title }}</h3>
                <p>
                    <span class="badge badge-primary p-1">Pendente</span>
                    {{ $task->description }}
                </p>
            </div>
        </div>
    </div>
  @endforeach
