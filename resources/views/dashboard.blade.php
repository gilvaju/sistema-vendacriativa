@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row d-flex flex-column justify-content-center bg-dark text-white" style="height: 10vh">
        @include('partials.header')
    </div>
    <div class="row pt-1" style="height: 80vh; overflow: auto">
        @include('partials.panels-content')
    </div>
    <div class="row d-flex flex-column justify-content-center bg-bluevc" style="height: 10vh">
        @include('partials.nav-panels')
    </div>
    <!-- Code begins here -->
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
            <a href="#">
                <i class="fas fa-plus my-float"></i>
            </a>
        </li>
    </ul>
</div>
@endsection
