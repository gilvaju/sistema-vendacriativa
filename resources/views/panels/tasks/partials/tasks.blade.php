@if ($agent->isMobile())
    <div class="col-12 col-xl-2">
        @include('panels.tasks.sections.mobile.pendent_list')
    </div>
    <div class="col-12 col-xl-2">
        @include('panels.tasks.sections.mobile.aprove_list')
    </div>
    <div class="col-12 col-xl-2">
        @include('panels.tasks.sections.mobile.production_list')
    </div>
    <div class="col-12 col-xl-2">
        @include('panels.tasks.sections.mobile.brified_list')
    </div>
    <div class="col-12 col-xl-2">
        @include('panels.tasks.sections.mobile.opened_list')
    </div>
    {{--<div class="col-12 d-none d-sm-block d-md-none">--}}
    <div class="col-12 col-xl-2">
        @include('panels.tasks.sections.mobile.closed_list')
    </div>
    @else
        <div class="col-12 col-xl-2">
            @include('panels.tasks.sections.opened_list')
        </div>
        <div class="col-12 col-xl-2">
            @include('panels.tasks.sections.brified_list')
        </div>
        <div class="col-12 col-xl-2">
            @include('panels.tasks.sections.production_list')
        </div>
        <div class="col-12 col-xl-2">
            @include('panels.tasks.sections.aprove_list')
        </div>
        <div class="col-12 col-xl-2">
            @include('panels.tasks.sections.pendent_list')
        </div>
        {{--<div class="col-12 d-none d-sm-block d-md-none">--}}
        <div class="col-12 col-xl-2">
            @include('panels.tasks.sections.closed_list')
        </div>
@endif
