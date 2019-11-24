@foreach($openedTasks as $task)
    <div class="list-group-item list-task-group">
        <div class="row">
            <div class="col-12">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <span class="badge badge-primary p-1">{{ $task->responsible->name }}</span>
                <span class="badge badge-secondary p-1">{{ $task->owner->name }}</span>
                <span class="badge badge-danger p-1">{{ config('sgvc.clients.'.$task->client_id) }}</span>
            </div>
{{--            <div class="col-4 text-right d-inline-flex my-auto mx-auto">--}}
{{--                <button type="submit" class="btn btn-outline-light border-0 bg-white text-dark btn-sm mr-1">--}}
{{--                    <i class="far fa-edit fa-2x"></i>--}}
{{--                </button>--}}
{{--                <form action="{{ route('task.destroy', $task->id) }}" method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-outline-light border-0 bg-white text-danger btn-sm">--}}
{{--                        <i class="far fa-trash-alt fa-2x"></i>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>
    </div>
  @endforeach

@if(count($openedTasks))
    <hr class="divider-list">
@endif
