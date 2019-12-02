<!-- Modal -->
<form method="POST" action="{{ route('task.update', $task) }}">
    @csrf
    @method('PATCH')
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
            <input type="text" class="form-control mb-1" name="title" id="" placeholder="Inserir tarefa" value="{{ $task->title }}">
            <textarea class="form-control mb-1" name="description" id="" rows="3">{{ $task->description }}"</textarea>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-6">
            <input class="form-control" type="date" name="delivery_date" value="{{ date('Y-m-d', strtotime($task->delivery_date)) }}" id="example-date-input">
        </div>
        <div class="col-6">
            <select name="status" class="custom-select">
                @foreach(config('sgvc.status') as $id => $status)
                    <option value="{{ $id }}" {{ $task->status === $id ? 'selected' : '' }} >{{ $status }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-6">
            <select name="client_id" class="custom-select">
                @foreach(config('sgvc.clients') as $id => $client)
                    <option value="{{ $id }}" {{ $task->client_id === $id ? 'selected' : '' }} >{{ $client }}</option>
                @endforeach
            </select>
            {{ $task->client }}
        </div>
        <div class="col-6">
            <select name="responsible_id" class="custom-select">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $task->responsible->id === $user->id ? 'selected' : '' }} >{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="owner_id" value="{{ $task->owner->id }}">
    </div>
    <div class="row mt-3">
        <div class="col-6 d-flex justify-content-start">
{{--            <form action="{{ route('task.destroy', $task->id) }}" method="POST">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" class="btn text-danger d-flex align-items-center">--}}
{{--                    <i class="far fa-2x fa-trash-alt"></i>--}}
{{--                </button>--}}
{{--            </form>--}}
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a class="btn btn-outline-secondary mr-2 d-flex align-items-center btn-lg" href="{{ route('home') }}" role="button">Voltar</a>
            <button type="submit" class="btn btn-success btn-lg" type="button">Salvar</button>
        </div>
    </div>
</form>
