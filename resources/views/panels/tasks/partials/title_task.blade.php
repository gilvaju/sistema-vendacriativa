<div class="row">
    <div class="col-12">
            @switch($statusGroupTasks)
                @case('Abertas')
                    <h5><i class="fas fa-plus text-opened"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
                @case('Brifadas')
                    <h5><i class="fas fa-list text-briefed"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
                @case('Pausadas')
                    <h5><i class="fas fa-pause-circle text-paused"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
                @case('Produzindo')
                    <h5><i class="fas fa-edit text-production"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
                @case('Aprovar')
                    <h5><i class="fas fa-check text-aprove"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
                @case('Pendentes')
                    <h5><i class="fas fa-stop-circle text-pendent"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
                @case('Concluídas')
                    <h5><i class="fas fa-check-double text-closed"></i> {{ $statusGroupTasks}} | {{ $countTasks }}</h5>
                    @break
        @endswitch
        <hr>
    </div>
</div>
