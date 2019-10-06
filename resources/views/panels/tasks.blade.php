<div class="input-group">
  <input type="text" class="form-control" name="title" id="" placeholder="Inserir tarefa">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary bg-orangevc text-white" type="button"><i class="fas fa-plus"></i></button>
  </div>
</div>
<hr>
<div class="list-group">
  @foreach($tasks as $task)
    <button type="button" class="list-group-item list-group-item-action list-group-flush">
        <span class="ml-2">{{ $task->title }}</span>
    </button>
  @endforeach
</div>