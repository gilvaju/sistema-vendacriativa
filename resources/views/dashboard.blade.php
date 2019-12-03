@extends('layouts.app')

@section('content')
<div class="container-fluid" class="full-content">
    <div class="row">
        @include('partials.header')
    </div>
    <div class="row">
        <div class="container-fluid">
            @if ($agent->isMobile())
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-xl-4">
                        @include('panels.tasks.partials.process')
                    </div>
                </div>
            @endif
            <div class="row">
                @include('partials.errors')
                @include('panels.tasks.partials.tasks')
            </div>
        </div>
    </div>

    <!-- Flot button actions -->
    <a href="#" class="float" id="menu-share">
        <i class="fas fa-bars my-float float-button-action"></i>
    </a>
    <ul class="float-actions">
        <li>
            <a href="#">
                <i class="fas fa-search my-float"></i>
            </a>
        </li>
        <li>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-plus my-float"></i>
            </button>
        </li>
    </ul>

    @include('panels.tasks.partials.create-task')
</div>
@endsection
