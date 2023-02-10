<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">MotoGo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="#tampilan">Tampilan</a>
                <a class="nav-link" href="#spesifikasi">Spesifikasi</a>
                <a class="nav-link" href="#review">Review</a>
                <a class="nav-link" href="#sk">Syarat & Ketentuan</a>
                <a class="nav-link" href="#kontak">Kontak</a>
            </div>
        </div>
        @auth
        <div class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                Hi, {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                    @csrf
                    <li><button class="dropdown-item" type="submit" href="#">Logout</button></li>
                </form>
            </ul>
            @else
            <a type="button" href="/login" class="btn btn-secondary btn-sm">Login</a>
        </div>
        @endauth
    </div>
</nav>