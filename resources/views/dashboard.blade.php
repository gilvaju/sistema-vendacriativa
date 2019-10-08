@extends('layouts.app')

@section('content')
<div class="row no-gutters">
    <div class="col-12">
        @include('dashboard.nav-panels')
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-tasks" role="tabpanel" aria-labelledby="nav-tasks-tab">
                            @include('panels.tasks')
                        </div>
                        <div class="tab-pane fade" id="nav-calendar" role="tabpanel" aria-labelledby="nav-calendar-tab">
                            @include('panels.nothing-yet')
                        </div>
                        <div class="tab-pane fade" id="nav-dollar" role="tabpanel" aria-labelledby="nav-dollar-tab">
                            @include('panels.nothing-yet')
                        </div>
                        <div class="tab-pane fade" id="nav-tools" role="tabpanel" aria-labelledby="nav-tools-tab">
                            @include('panels.nothing-yet')
                        </div>
                        <div class="tab-pane fade" id="nav-cogs" role="tabpanel" aria-labelledby="nav-cogs-tab">
                            @include('panels.nothing-yet')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
