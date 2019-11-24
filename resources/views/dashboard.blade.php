@extends('layouts.app')

@section('content')
<div class="container-fluid" class="full-content">
    <div class="row d-flex flex-column justify-content-center bg-dark text-white" style="height: 10vh">
        @include('partials.header')
    </div>
    <div class="row d-flex flex-column justify-content-center bg-bluevc">
        @include('partials.nav-panels')
    </div>
    <div class="row pt-1 mb-5">
        @include('partials.panels-content')
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

    @include('partials.create-task')
</div>
@endsection
