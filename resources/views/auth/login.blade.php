@extends('layouts.default')

@section('content')
<div id="app" class="container-fluid">
    <div class="row min-vh-100 d-flex flex-column justify-content-center container-signin">
        <div class="col-12">
            <div class="card card-signin mx-auto">
                <div class="card-body">
                    <div class="row">
                            <div class="col-12">
                                <img src="img/full-logo.png" class="full-logo" alt="">
                                <hr class="mt-1 mb-1">
                            </div>
                            <div class="col-12 mt-3">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input type="email" name="email" placeholder="Digite aqui seu email" class="form-control mt-3" required autofocus>
                                    <input type="password" name="password" placeholder="Digite aqui sua senha" class="form-control mt-3" required>

                                    <hr>

                                    <input type="submit" value="Entrar" class="btn bg-primary text-light btn-block">
                                    <a href="/register" class="btn btn-secondary text-light btn-block">Cadastro</a>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
