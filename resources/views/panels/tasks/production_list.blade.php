@foreach($productionTasks as $task)
    <div class="list-group-item list-task-group todo-list">
        <div class="row">
            <div class="col-8">
                <h3 class="mb-0">{{ $task->title }}</h3>
                <p>
                    <span class="badge badge-primary p-1">Concluída</span>
                    {{ $task->description }}
                </p>
            </div>
        </div>
    </div>
  @endforeach

@if(count($productionTasks))
    <hr class="divider-list">
@endif
