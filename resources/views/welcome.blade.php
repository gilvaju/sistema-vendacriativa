@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="row min-vh-100 d-flex flex-column justify-content-center">
            <div class="col-12">
                <div class="card card-signin mx-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <img src="img/full-logo.png" class="full-logo" alt="">
                            </div>
                            <div class="col-12 mt-3">
                                <hr>
                                <p class=" text-justify">Olá, você está tentou entrar no sistema de gestão da Agência Venda Criativa, caso você já tenha suas credencias é só clicar em Entrar que você será redirecionado para a página de login</p>
                                <p class=" text-justify">Caso você queira apenas visitar o site da Agência, basta clicar no botão para visita-lo.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <p class=" text-justify">Você gostaria de fazer o que?</p>
                                <a href="https://vendacriativa.com" class="btn btn-secondary btn-block">Visitar o Site</a>
                                <a href="/login" class="btn btn-success btn-block">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
