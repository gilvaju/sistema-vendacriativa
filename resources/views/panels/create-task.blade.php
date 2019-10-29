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
                        <input type="hidden" name="status" value="opened">
                        <!-- <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary bg-orangevc text-white" type="button">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
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