@if(count($openedTasks))
    <div class="type-tasks-title">
        <h5>Tarefas abertas</h5>
        <hr>
    </div>
@endif

@foreach($openedTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="row no-gutters">
            <div class="col-10">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <span class="badge badge-primary p-1">{{ $task->responsible->name }}</span>
                <span class="badge badge-secondary p-1">{{ $task->owner->name }}</span>
                <span class="badge badge-danger p-1">{{ config('sgvc.clients.'.$task->client_id) }}</span>
            </div>
            <div class="col-2 text-right d-inline-flex my-auto mx-auto">
                <div class="row no-gutters">
                    <div class="col-6">
                        <button type="submit" class="btn btn-outline-light border-0 bg-white text-dark btn-sm">
                            <i class="far fa-edit"></i>
                        </button>
                    </div>
                    <div class="col-6">
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-success border-0 bg-white text-success btn-sm">
                                <i class="fas fa-stop-circle"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger border-0 bg-white text-danger btn-sm">
                                <i class="fas fa-stop-circle"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-success border-0 bg-white text-success btn-sm">
                                <i class="fas fa-check-double"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-success border-0 bg-white text-success btn-sm">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-warning border-0 bg-white text-warning btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach

@if(count($openedTasks))
    <hr class="divider-list">
@endif
