<div class="col-3">
    <div class="row mb-1">
        <div class="col-6">
            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn border-0 bg-white text-danger">
                    <i class="fas fa-stop-circle"></i>
                </button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn border-0 bg-white text-success">
                    <i class="fas fa-check-double"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn border-0 bg-white text-primary">
                    <i class="fas fa-check"></i>
                </button>
            </form>
        </div>
        <div class="col-6">
            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn border-0 bg-white text-info">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
        </div>
    </div>
</div>
