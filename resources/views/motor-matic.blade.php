<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motor Matic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">MotoGo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#produk">Booking</a>
                    </li>
                </ul>
                @auth
                <div class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
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
        </div>
    </nav>

    @include('partials.carousel')

    <div id="produk" class="container py-4">
        <div class="row my-3 text-center">
            <h1>Produk Kami</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, autem. Maxime, quas. Et esse voluptates
                debitis dignissimos, sit obcaecati modi delectus optio veritatis, vero enim dolorum error alias! Natus,
                vitae! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod soluta, placeat quis cum explicabo
                cupiditate dolores, laborum aut velit debitis ducimus harum ad fugit dolor fuga quam modi provident
                reiciendis?</p>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-md mt-4 mb-4 justify-content-center">
                <li class="page-item">
                    <a class="page-link disabled" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="/penyewa">Matic</a></li>
                <li class="page-item"><a class="page-link" href="/motor-manual">Manual</a></li>
                <li class="page-item"><a class="page-link" href="/motor-sport">Sport</a></li>
                <li class="page-item">
                    <a class="page-link" href="/motor-manual" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
            @foreach($motors as $mtr)
            <div class="col border">
                <div class="card my-3">
                    <img src="{{asset('storage/'.$mtr->img1)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mtr->merkMotor }}</h5>
                        <p class="card-text">
                        <ul>
                            <li>Tipe : {{ $mtr->category->name }}</li>
                            <li>Mesin : {{ $mtr->mesin }} cc</li>
                            <li>Tahun Keluaran : {{ $mtr->tahunKeluaran }}</li>
                        </ul>
                        </p>
                        <a href="/penyewa/{{ $mtr->id }}" class="btn btn-primary">Booking now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @include('partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>