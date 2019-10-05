@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seja bem-vindo ao Sistema de Gestão da Venda Criativa
                </div>
            </div> -->
            <div class="">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Financeiro</a>
                    </li>
                </ul>
                <div class="">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-12">
                                    <form method="POST" action="{{ route('task.store') }}">
                                        @csrf
                                        <div class="input-group mb-3 flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="title"><i class="fab fa-typo3"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="title" placeholder="Título" aria-label="Título" aria-describedby="title">
                                        </div>
                                        <div class="input-group mb-3 flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="description"><i class="fab fa-typo3"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="description" placeholder="Briefing" aria-label="Briefing" aria-describedby="description">
                                        </div>
                                        <div class="col-12 text-right">
                                            <input type="hidden" name="owner_id" value="{{ Auth::user()->id }}">
                                            <button type="submit">Adicionar Tarefa</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="list-group">
                                        @foreach($tasks as $task)
                                            <a href="" class="list-group-item list-group-item-action">
                                                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                                {{ $task->title }}
                                            </a> 
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            Seja bem-vindo ao Sistema de Gestão da Venda Criativa
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            Seja bem-vindo ao Sistema de Gestão da Venda Criativa
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
