{{--@include('panels.tasks.partials.process')--}}
<div class="col-12 col-xl-3">
    @include('panels.tasks.sections.pendent_list')
</div>
<div class="col-12 col-xl-3">
    @include('panels.tasks.sections.aprove_list')
</div>
<div class="col-12 col-xl-3">
    @include('panels.tasks.sections.production_list')
</div>
<div class="col-12 col-xl-3">
    @include('panels.tasks.sections.opened_list')
</div>
<div class="col-12 d-none d-sm-block d-md-none">
    @include('panels.tasks.sections.closed_list')
</div>
