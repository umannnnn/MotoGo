<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pilih Role</title>

</head>

<body>

    <div class="container"> 
        <div class="card text-center mt-5">
            <div class="card-header">
                <h2 class="text-center">PILIH ROLE</h2>
                <p class="text-center">Berikut ini merupakan pilihan role yang mana masing-masing role memiliki fitur tersendiri dan memiliki fitur tambahan</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">PENYEWA</h5>
                                <hr>
                                <p class="card-text text-start">Sebagai penyewa anda dapat berpartisipasi untuk menyewakan motor anda pada website kami</p>
                                <ul class="text-start">
                                    <li>Pemesanan sewa motor</li>
                                    <li>Daftar harga</li>
                                    <li>Galeri motor</li>
                                    <li>Informasi kontak</li>
                                    <li>Review motor</li>
                                    <li>Menambahkan motor</li>
                                </ul>
                                <hr>
                                <form action="{{url('/choose-role')}}" method="POST">
                                @csrf
                                <input type="hidden" name="role" id="role">
                                <button type="submit" class="btn btn-primary" onclick="setRoles('penyewa')">Pilih role ini</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">USER</h5>
                                <hr>
                                <p class="card-text text-start">Sebagai user biasa anda hanya dapat booking motor yang telah disediakan pada website kami</p>
                                <ul class="text-start">
                                    <li>Pemesanan sewa motor</li>
                                    <li>Daftar harga</li>
                                    <li>Galeri motor</li>
                                    <li>Informasi kontak</li>
                                    <li>Review motor</li>
                                    <li style="text-decoration: line-through;">Menambahkan motor</li>
                                </ul>
                                <hr>
                                <button type="submit" class="btn btn-primary" onclick="setRoles('user')">Pilih role ini</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
        function setRoles(role){
    document.getElementById('role').value = role;
    }
    </script>
</body>

</html>