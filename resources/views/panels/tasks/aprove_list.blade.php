@foreach($aproveTasks as $task)
    <div class="list-group-item list-task-group aprove-list">
        <div class="row">
            <div class="col-8">
                <h3 class="mb-0">{{ $task->title }}</h3>
                <p>
                    <span class="badge badge-primary p-1">Aprovar</span>
                    {{ $task->description }}
                </p>
            </div>
        </div>
    </div>
  @endforeach

@if(count($aproveTasks))
    <hr class="divider-list">
@endif
