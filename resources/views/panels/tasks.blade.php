<form method="POST" action="{{ route('task.store') }}">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="title" id="" placeholder="Inserir tarefa">
        <div class="input-group-append">
            <input type="hidden" name="status" value="opened">
            <input type="hidden" name="owner_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="responsible_designer" value="{{ Auth::user()->id }}">
            <input type="hidden" name="client_id" value="{{ Auth::user()->id }}">
            <button type="submit" class="btn btn-outline-secondary bg-orangevc text-white" type="button">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</form>
<hr>
<div class="list-group">
  @foreach($tasks as $task)
    <div type="button" class="list-group-item list-group-flush">
        <span class="ml-2">{{ $task->title }}</span>
        
        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
            @csrf   
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger btn-sm">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
</div>
  @endforeach
</div>