@extends('layouts.app')

@section('content')
    <div class="container-fluid" class="full-content">
        <div class="row">
            @include('partials.header')
        </div>
        <div class="container-fluid mt-5 pl-0 pr-0">
            <h5>Editar Tarefa</h5>
            <hr>
            <div class="row">
                @include('partials.errors')
                <div class="col-12 col-xl-4">
                    @include('panels.tasks.edit-task')
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
