<div class="list-group list-tasks-group mt-2">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <ul>
                    <li><i class="fas fa-step-backward"></i> Aberta</li>
                    <li><i class="fab fa-product-hunt"></i> Produção</li>
                    <li><i class="fas fa-stop-circle"></i> Pendente</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <ul>
                    <li><i class="fas fa-check-double"></i> Concluída</li>
                    <li><i class="fas fa-check"></i> Para aprovação</li>
                    <li><i class="far fa-trash-alt"></i> Excluir</li>
                </ul>
            </div>
        </div>
    </div>
    @include('panels.tasks.pendent_list')
    @include('panels.tasks.aprove_list')
    @include('panels.tasks.production_list')
    @include('panels.tasks.opened_list')
    @include('panels.tasks.closed_list')
</div>

{{--<div class="container-fluid">--}}
{{--    <hr>--}}
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <h5>Tarefas: <span class="badge badge-danger">45</span></h5>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-5">--}}
{{--            <ul class="pl-0" style="list-style-type: none; font-size: 0.8rem">--}}
{{--                <li>Oborrachão: 5</li>--}}
{{--                <li>Centro Vitta: 5</li>--}}
{{--                <li>Infante: 5</li>--}}
{{--                <li>Matersol: 15</li>--}}
{{--                <li>All Pé: 15</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="col-5">--}}
{{--            <ul class="pl-0" style="list-style-type: none; font-size: 0.8rem">--}}
{{--                <li>Estratégia: 5</li>--}}
{{--                <li>Criação: 5</li>--}}
{{--                <li>IVC: 5</li>--}}
{{--                <li>Operacional: 15</li>--}}
{{--                <li>Projetos: 15</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
