@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row d-flex flex-column justify-content-center bg-orangevc text-white" style="height: 10vh">
        @include('partials.header')
    </div>
    <div class="row pt-1" style="height: 80vh; overflow: auto">
        @include('partials.panels-content')
    </div>
    <div class="row d-flex flex-column justify-content-center bg-bluevc" style="height: 10vh">
        @include('partials.nav-panels')
    </div>
    <!-- Code begins here -->
    <a href="#" class="float">
        <i class="fas fa-plus my-float fa-2x"></i>
    </a>
</div>
@endsection
