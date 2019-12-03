<li class="list-group-item">
    <div class="row d-flex align-items-center">
        <div class="col-12 pl-1">
            <div class=" d-flex align-items-center justify-content-between">
                <span class="badge client-badge">{{ config('sgvc.clients.'.$task->client_id) }}</span>
                <button type="button" class="btn btn-sm text-aprove" data-toggle="modal" data-target="#exampleModal{{ $task->id }}">
                    <i class="fas fa-exchange-alt"></i>
                </button>
                <div class="modal fade" id="exampleModal{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="{{ route('task.change', $task) }}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <select class="custom-select" name="status" aria-label="Example select with button addon">
                                            @foreach(config('sgvc.status') as $id => $status)
                                                <option value="{{ $id }}" {{ $task->status === $id ? 'selected' : '' }} >{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">Alterar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('task.edit', $task) }}">
                <h5>{{ $task->title }}</h5>
            </a>
            <p>{{ $task->description }}</p>
            <span class="badge responsible-badge">{{ $task->responsible->name }}</span>
            <span class="badge text-secondary"><i class="fas fa-chevron-right"></i></span>
            <span class="badge delivery-badge">{{ $task->delivery() }}</span>
        </div>
    </div>
</li>
