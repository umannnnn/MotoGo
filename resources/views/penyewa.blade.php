<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
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
                    <li><a class="nav-link" href="/">Home</a></li>
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
                            <li><button class="dropdown-item" style="color: black" type="submit"
                                    href="#">Logout</button></li>
                        </form>
                    </ul>
                    @else
                    <a type="button" href="/login" class="btn btn-secondary btn-sm">Login</a>
                </div>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- Page Heading -->
        <h1 class="mt-3">Tambah Data Motor</h1>
        <p class="mb-4"> Role anda adalah penyewa, penyewa dapat menambahkan motor yang nantinya akan di tampilkan pada
            bagian user biasa.</p>

        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header">
                <h4 class="font-weight-bold">Form Tambah Data Motor</h4>
            </div>
            <!-- Card Content - Collapse -->
            <form action="{{ route('landing1.index') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body col-lg-10">
                        <div class="mb-3">
                            <label for="merkMotor" class="form-label">Merk Motor</label>
                            <input class="form-control" id="merkMotor" name="merkMotor" type="text"
                                aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <label for="mesin" class="form-label">Kapasitas Mesin</label>
                            <input class="form-control" id="mesin" name="mesin" type="text"
                                aria-label="default input example">
                            <div id="mesinHelp" class="form-text">Isi kapasitas mesin dengan ukuran CC. ex : 160</div>
                        </div>
                        <div class="mb-3">
                            <label for="bahanBakar" class="form-label">Bahan Bakar</label>
                            <select class="form-select" id="bahanBakar" name="bahanBakar"
                                aria-label="Default select example">
                                <option value="1">Bensin</option>
                                <option value="2">Solar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna Motor</label>
                            <input class="form-control" id="warna" name="warna" type="text"
                                aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <label for="speedometer" class="form-label">Jenis Speedometer</label>
                            <input class="form-control" id="speedometer" name="speedometer" type="text"
                                aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <label for="tipe" class="form-label">Tipe Motor</label>
                            <select class="form-select" id="tipe" name="tipe" aria-label="Default select example">
                                <option value="1">Matic</option>
                                <option value="2">Manual</option>
                                <option value="3">Sport</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tahunKeluaran" class="form-label">Tahun Keluaran</label>
                            <select class="form-select" id="tahunKeluaran" name="tahunKeluaran"
                                aria-label="Default select example">
                                <option value="1">2015</option>
                                <option value="2">2016</option>
                                <option value="3">2017</option>
                                <option value="4">2018</option>
                                <option value="5">2019</option>
                                <option value="6">2020</option>
                                <option value="7">2021</option>
                                <option value="8">2022</option>
                                <option value="9">2023</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Review Motor</label>
                            <div id="editor" name="review"></div>
                        </div>
                        <div class="mb-3">
                            <label for="img1" class="form-label">Tampak Keseluruhan</label>
                            <input class="form-control" id="img1" name="img1" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="img2" class="form-label">Tampak Depan</label>
                            <input class="form-control" id="img2" name="img2" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="img3" class="form-label">Tampak Belakang</label>
                            <input class="form-control" id="img3" name="img3" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="img4" class="form-label">Tampak Mesin</label>
                            <input class="form-control" id="img4" name="img4" type="file" id="formFile">
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>

</html>