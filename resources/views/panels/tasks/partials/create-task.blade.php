<!-- Modal -->
<form method="POST" action="{{ route('task.store') }}">
@csrf
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Cadastrar Tarefa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                        <div class="col-12">
                            <select name="client_id" class="custom-select">
                                @foreach(config('sgvc.clients') as $id => $client)
                                    <option value="{{ $id }}" >{{ $client }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <select name="responsible_id" class="custom-select">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <select name="owner_id" class="custom-select">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-outline-secondary bg-orangevc text-white" type="button">
                        <!-- <i class="fas fa-plus"></i> -->
                        Adicionar
                    </button>
                    <!-- <button type="submit" class="btn btn-primary">Adicionar</button> -->
                </div>
            </div>
        </div>
    </div>
</form>
