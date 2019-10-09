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
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf    
                                    <input type="text" name="name" placeholder="Nome de Cadastro" class="form-control mt-3" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <input type="email" name="email" placeholder="Email para cadastro" class="form-control mt-3" value="{{ old('email') }}" required autocomplete="email">
                                    <input type="password" name="password" placeholder="Senha de acesso" class="form-control mt-3" required autocomplete="new-password">
                                    <input type="password" name="password_confirmation" placeholder="Repita aqui sua senha" class="form-control mt-3" required autocomplete="new-password">
                                    
                                    <hr>
                                    
                                    <input type="submit" value="Cadastrar" class="btn bg-bluevc text-light btn-block">
                                    <a href="/login" class="btn btn-secondary text-light btn-block">Já possuo conta</a>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection