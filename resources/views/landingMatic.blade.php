<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MotoGo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        @include('partials.navbar')

        @include('partials.carousel')
        
        <div class="container py-4">
            <div class="row my-3">
                <h1>MotoGo</h1>
                <p>Perusahaan kami, MotoGo, menawarkan layanan penyewaan motor terbaik bagi Anda yang membutuhkan kendaraan selama bepergian. Kami memiliki beragam pilihan motor yang bisa disewa, mulai dari motor matic hingga motor sport. Seluruh motor kami sudah terawat dan dilengkapi dengan fasilitas yang membuat perjalanan Anda semakin nyaman dan menyenangkan. Kami memahami bahwa kebutuhan setiap pelanggan berbeda, oleh karena itu kami menawarkan berbagai pilihan paket sewa yang bisa disesuaikan dengan kebutuhan Anda. Kami percaya bahwa layanan kami akan membantu Anda memiliki perjalanan yang menyenangkan dan memuaskan.</p>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-md mt-4 mb-4 justify-content-center">
                    <li class="page-item">
                        <a class="page-link disabled" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="/">Matic</a></li>
                    <li class="page-item"><a class="page-link" href="/landing2">Manual</a></li>
                    <li class="page-item"><a class="page-link" href="/landing3">Sport</a></li>
                    <li class="page-item">
                        <a class="page-link" href="/landing2" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/pcx/pcx.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Honda PCX 160</h5>
                            <p class="card-text">
                                <ul>
                                    <li>Tipe : Matic</li>
                                    <li>Mesin : 160cc</li>
                                    <li>Tahun Keluaran : 2022</li>
                                </ul>
                            </p>
                            <a href="/spec" class="btn btn-primary">Booking now</a>
                        </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/sprint.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vespa Sprint</h5>
                        <p class="card-text">
                            <ul>
                                <li>Tipe : Matic</li>
                                <li>Mesin : 250cc</li>
                                <li>Tahun Keluaran : 2022</li>
                            </ul>
                        </p>
                        <a href="#" class="btn btn-primary">Booking now</a>
                    </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/nmax.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yamaha NMAX 155</h5>
                            <p class="card-text">
                            <ul>
                                <li>Tipe : Matic</li>
                                <li>Mesin : 155cc</li>
                                <li>Tahun Keluaran : 2022</li>
                            </ul>
                            </p>
                            <a href="#" class="btn btn-primary">Booking now</a>
                        </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/pcx/pcx.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Honda PCX 160</h5>
                            <p class="card-text">
                                <ul>
                                    <li>Tipe : Matic</li>
                                    <li>Mesin : 160cc</li>
                                    <li>Tahun Keluaran : 2022</li>
                                </ul>
                            </p>
                            <a href="/spec" class="btn btn-primary">Booking now</a>
                        </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/sprint.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vespa Sprint</h5>
                        <p class="card-text">
                            <ul>
                                <li>Tipe : Matic</li>
                                <li>Mesin : 250cc</li>
                                <li>Tahun Keluaran : 2022</li>
                            </ul>
                        </p>
                        <a href="#" class="btn btn-primary">Booking now</a>
                    </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/nmax.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yamaha NMAX 155</h5>
                            <p class="card-text">
                            <ul>
                                <li>Tipe : Matic</li>
                                <li>Mesin : 155cc</li>
                                <li>Tahun Keluaran : 2022</li>
                            </ul>
                            </p>
                            <a href="#" class="btn btn-primary">Booking now</a>
                        </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/pcx/pcx.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Honda PCX 160</h5>
                            <p class="card-text">
                                <ul>
                                    <li>Tipe : Matic</li>
                                    <li>Mesin : 160cc</li>
                                    <li>Tahun Keluaran : 2022</li>
                                </ul>
                            </p>
                            <a href="/spec" class="btn btn-primary">Booking now</a>
                        </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/sprint.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vespa Sprint</h5>
                        <p class="card-text">
                            <ul>
                                <li>Tipe : Matic</li>
                                <li>Mesin : 250cc</li>
                                <li>Tahun Keluaran : 2022</li>
                            </ul>
                        </p>
                        <a href="#" class="btn btn-primary">Booking now</a>
                    </div>
                    </div>
                </div>
                <div class="col border">
                    <div class="card my-3">
                    <img src="img/nmax.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yamaha NMAX 155</h5>
                            <p class="card-text">
                            <ul>
                                <li>Tipe : Matic</li>
                                <li>Mesin : 155cc</li>
                                <li>Tahun Keluaran : 2022</li>
                            </ul>
                            </p>
                            <a href="#" class="btn btn-primary">Booking now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        @include('partials.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
</html>