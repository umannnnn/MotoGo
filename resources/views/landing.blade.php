<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MotoGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">MotoGo</a>
            <div class="collapse navbar-collapse">
                
            </div>
            @auth
            <div class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @role('penyewa')
                    <li><a class="dropdown-item" href="{{ route('penyewa.create') }}">Tambah Motor</a></li>
                    @endrole
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <form action="/logout" method="post">
                        @csrf
                        <li><button class="dropdown-item" style="color: black" type="submit" href="#">Logout</button>
                        </li>
                    </form>
                </ul>
                @else
                <a type="button" href="/login" class="btn btn-secondary btn-sm">Login</a>
            </div>
            @endauth
        </div>
    </nav>

    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <section id="home" class="wow fadeInRight" data-wow-delay="0.5s">
                <div class="col-lg-12 mb-5">
                    <h1 class="page-header">
                        Welcome to MotoGo
                    </h1>
                    <p style="text-align: justify">Perusahaan kami, MotoGo, menawarkan layanan penyewaan motor terbaik
                        bagi Anda yang membutuhkan kendaraan selama bepergian. Kami memiliki beragam pilihan motor yang
                        bisa disewa, mulai dari motor matic hingga motor sport. Seluruh motor kami sudah terawat dan
                        dilengkapi dengan fasilitas yang membuat perjalanan Anda semakin nyaman dan menyenangkan. Kami
                        memahami bahwa kebutuhan setiap pelanggan berbeda, oleh karena itu kami menawarkan berbagai
                        pilihan paket sewa yang bisa disesuaikan dengan kebutuhan Anda. Kami percaya bahwa layanan kami
                        akan membantu Anda memiliki perjalanan yang menyenangkan dan memuaskan.</p>
                </div>
            </section>

            <div class="col-md-4">
                <section class="wow fadeInDown" data-wow-delay="0.5s">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i>Mudah & Aman</h4>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify">Perusahaan kami memahami bahwa keamanan dan kenyamanan adalah
                                prioritas utama bagi pelanggan kami. Oleh karena itu, kami menawarkan layanan penyewaan
                                sepeda motor yang mudah dan aman. Kami memastikan bahwa sepeda motor yang disewakan
                                dalam kondisi baik dan aman, dan pelanggan kami dapat memperoleh bantuan yang dibutuhkan
                                saat menyewa sepeda motor.</p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="wow fadeInDown" data-wow-delay="0.5s">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Harga Terjangkau</h4>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify">Perusahaan kami memahami bahwa biaya adalah salah satu hal
                                yang penting bagi pelanggan kami dalam memilih tempat penyewaan sepeda motor. Oleh
                                karena itu, Kami memastikan bahwa harga yang ditawarkan merupakan harga terbaik yang ada
                                di pasaran, sehingga pelanggan kami dapat menikmati pengalaman menyewa sepeda motor
                                tanpa harus memikirkan biaya yang terlalu tinggi.</p>
                        </div>
                    </div>
                </section>
            </div>


            <div class="col-md-4">
                <section class="wow fadeInDown" data-wow-delay="0.5s">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Lokasi Strategis</h4>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify">Lokasi adalah faktor penting bagi pelanggan kami dalam
                                memilih tempat penyewaan sepeda motor. Perusahaan kami memahami hal ini dan oleh karena
                                itu, kami menawarkan lokasi yang strategis bagi pelanggan kami. Hal ini membuat
                                pelanggan kami dapat dengan mudah menjangkau tujuan mereka tanpa harus mengeluarkan
                                waktu dan biaya tambahan untuk perjalanan.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <section id="layanan" class="wow fadeInRight" data-wow-delay="0.5s">
                    <h2 class="page-header">Layanan MotoGo</h2>
                </section>
            </div>
            <div class="col-md-6">
                <section class="wow fadeInDown" data-wow-delay="0.5s">
                    <p>Berikut ini merupakan layanan yang disediakan oleh kami :</p>
                    <ul>
                        <li><strong> Antar - jemput ke lokasi penyewaan</strong></li>
                        <li><strong> Asuransi pada saat menggunakan motor sewaan</strong></li>
                        <li><strong> Pilihan beragam jenis dan merk motor yang tersedia</strong></li>
                        <li><strong> Layanan perbaikan dan pemeliharaan motor selama masa penyewaan</strong></li>
                        <li><strong> Layanan bantuan dan dukungan 24 jam selama penggunaan motor</strong></li>
                    </ul>
                    <p style="text-align: justify">Perusahaan kami memahami bahwa layanan yang baik adalah salah satu
                        faktor penting bagi pelanggan kami dalam memilih tempat penyewaan sepeda motor. Oleh karena itu,
                        kami menawarkan berbagai layanan untuk memenuhi kebutuhan pelanggan kami Kami menyediakan berbagai 
                        pilihan sepeda motor yang sesuai dengan kebutuhan pelanggan kami, mulai dari sepeda motor untuk 
                        perjalanan singkat hingga sepeda motor untuk perjalanan jauh.</p>
                        <div class="d-grid gap-2 mb-3">
                            <a class="btn btn-primary" href="{{ route('penyewa.index') }}" type="button">Lihat Pilihan Motor...</a>
                        </div>
                    </section>
            </div>
            <div class="col-md-6">
                <section class="wow fadeInDown" data-wow-delay="0.5s">
                    <img class="img-responsive" src="http://source.unsplash.com/1920x1080?vespa" alt="">
                </section>
            </div>
        </div>
        <!-- /.row -->

        <div class="sectiona">
            <!-- Portfolio Section -->
            <div class="row">
                <div class="col-lg-12">
                    <section id="gallery" class="wow fadeInRight" data-wow-delay="0.5s">
                        <h2 class="page-header">Gallery MotoGo</h2>
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="wow fadeInDown" data-wow-delay="0.5s">
                        <img class="img-responsive zoom" src="http://source.unsplash.com/1920x1080?kawasaki" alt="">
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="wow fadeInDown" data-wow-delay="0.5s">
                        <img class="img-responsive zoom" src="http://source.unsplash.com/1920x1080?husqvarna" alt="">
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="wow fadeInDown" data-wow-delay="0.5s">
                        <img class="img-responsive zoom" src="http://source.unsplash.com/1920x1080?yamaha" alt="">
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="wow fadeInDown" data-wow-delay="0.5s">
                        <img class="img-responsive zoom" src="http://source.unsplash.com/1920x1080?mvagusta" alt="">
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="wow fadeInDown" data-wow-delay="0.5s">
                        <img class="img-responsive zoom" src="http://source.unsplash.com/1920x1080?harleydavidson" alt="">
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="wow fadeInDown" data-wow-delay="0.5s">
                        <img class="img-responsive zoom" src="http://source.unsplash.com/1920x1080?ducati" alt="">
                    </section>
                </div>
            </div>
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