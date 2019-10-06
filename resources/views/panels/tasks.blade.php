<form method="POST" action="{{ route('task.store') }}">
    @csrf
    <input type="text" class="form-control mb-1" name="title" id="" placeholder="Inserir tarefa">
    <div class="input-group">
        <input type="hidden" name="owner_id" value="{{ Auth::user()->name }}">
        <select name="client_id"  class="custom-select">
            <option value="" disabled selected>Cliente</option>
            <option value="OB">Oborrachão</option>
            <option value="CV">Centro Vitta</option>
        </select>
        <select name="responsible_designer" class="custom-select">
            <option value="" disabled  selected>Designer</option>
            <option value="JN">Nicácio</option>
            <option value="PH">Phill</option>
        </select>
        <div class="input-group-append">
            <input type="hidden" name="status" value="opened">
            <button type="submit" class="btn btn-outline-secondary bg-orangevc text-white" type="button">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</form>
<hr>
<div class="list-group list-group-flush">
  @foreach($tasks as $task)
    <div class="list-group-item">
        <div class="row">
            <div class="col-8">
                <div>{{ $task->title }}</div>
                <span class="badge badge-primary">{{ $task->responsible_designer }}</span>
                <span class="badge badge-secondary">{{ $task->owner_id }}</span>
                <span class="badge badge-danger">{{ $task->client_id }}</span>
            </div>
            <div class="col-4 text-right d-inline-flex my-auto mx-auto">
                <button type="submit" class="btn btn-outline-light border-0 bg-white text-dark btn-sm mr-1">
                    <i class="far fa-edit fa-2x"></i>
                </button>
                <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                    @csrf   
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-light border-0 bg-white text-danger btn-sm">
                        <i class="far fa-trash-alt fa-2x"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
  @endforeach
</div>