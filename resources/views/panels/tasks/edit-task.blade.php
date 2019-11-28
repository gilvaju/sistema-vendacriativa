<!-- Modal -->
<form method="POST" action="{{ route('task.update', $task) }}">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger notifications-general" role="alert">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <input type="text" class="form-control mb-1" name="title" id="" placeholder="Inserir tarefa" value="{{ old('title') }}">
            <textarea class="form-control mb-1" name="description" id="" rows="3"></textarea>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-6">
            <input class="form-control" type="date" name="delivery_date" value="2011-08-19" id="example-date-input">
        </div>
        <div class="col-6">
            <select name="status" class="custom-select">
                @foreach(config('sgvc.status') as $id => $status)
                    <option value="{{ $id }}" >{{ $status }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-6">
            <select name="client_id" class="custom-select">
                @foreach(config('sgvc.clients') as $id => $client)
                    <option value="{{ $id }}" >{{ $client }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <select name="responsible_id" class="custom-select">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('home') }}" class="mr-2">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Voltar</button>
            </a>
            <button type="submit" class="btn btn-success" type="button">
                Salvar
            </button>
        </div>
    </div>
</form>
