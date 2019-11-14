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
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control" type="hidden" name="owner_id" value="{{ Auth::user()->name }}">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                        <div class="col-6">
                            <select name="status" class="custom-select">
                                <option value="" disabled selected>Status</option>
                                <option value="Aberto">Aberto</option>
                                <option value="Pendente">Pendente</option>
                                <option value="Fechado">Fechado</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <select name="client_id" class="custom-select">
                                <option value="" disabled selected>Cliente</option>
                                <option value="OB">Oborrachão</option>
                                <option value="CV">Centro Vitta</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select name="responsible_designer" class="custom-select">
                                <option value="" disabled  selected>Designer</option>
                                <option value="JN">Nicácio</option>
                                <option value="PH">Phill</option>
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