<form action="{{ route('home') }}" method="GET">
    <div class="input-group">
        <select class="mr-2 form-control form-control-sm" name="client_id" aria-label="Example select with button addon">
            <option value="">Todos</option>
        @foreach(config('sgvc.clients') as $id => $status)
                <option value="{{ $id }}">{{ $status }}</option>
            @endforeach
        </select>
{{--        <select class="mr-2 form-control form-control-sm" name="status" aria-label="Example select with button addon">--}}
{{--            @foreach(config('sgvc.status') as $id => $status)--}}
{{--                <option value="{{ $id }}">{{ $status }}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
        <select class="mr-2 form-control form-control-sm" name="responsible_id" aria-label="Example select with button addon">
            <option value="">Todos</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="mr-2 btn btn-primary btn-sm">Filtrar</button>
    </div>
</form>
