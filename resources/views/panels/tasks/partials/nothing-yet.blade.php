<div class="row min-vh-100 d-flex flex-column justify-content-center">
    <div class="col-12 text-center">
        <h1 class="display-6">Ainda em <br> Desenvolvimento!</h1>
        <a class="btn btn-primary bg-white btn-block text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>