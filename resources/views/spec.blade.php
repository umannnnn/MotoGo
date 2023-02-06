<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MotoGo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylecard.sass">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        .mySlides {display:none}
        p {font-size: 17px}
        </style>
    </head>

    <body>
        @include('partials.navbar')
        
        <div id="tampilan" class="container mt-3">
            <div class="w3-container">
                <h2><strong>Honda PCX 160</strong></h2>
                <p>Mulai dari Rp. 150000 / Hari</p>
                <div class="w3-display-container mySlides">
                    <img src="img/pcx/pcx.webp" style="width:100%;margin-bottom:-6px">
                    <div class="w3-display-bottomleft w3-container w3-black">
                        <p>Tampak Keseluruhan</p>
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="img/pcx/pcxDepan.webp" style="width:100%;margin-bottom:-6px">
                    <div class="w3-display-bottomleft w3-container w3-black">
                        <p>Tampak Depan</p>
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="img/pcx/pcxBelakang.webp" style="width:100%;margin-bottom:-6px">
                    <div class="w3-display-bottomleft w3-container w3-black">
                        <p>Tampak Belakang</p>
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="img/pcx/pcxMesin.webp" style="width:100%;margin-bottom:-6px">
                    <div class="w3-display-bottomleft w3-container w3-black">
                        <p>Mesin</p>
                    </div>
                </div>
            </div>

            <div class="w3-row-padding w3-section">
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/pcx/pcx.webp" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Living room">
                </div>
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/pcx/pcxDepan.webp" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Dining room">
                </div>
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/pcx/pcxBelakang.webp" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
                </div>
                <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/pcx/pcxMesin.webp" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Second Living Room">
                </div>
            </div>

            <div id="spesifikasi" class="container mt-5 ">
                <h4><strong>Spesifikasi</strong></h4>
                <div class="row large">
                    <div class="col s6">
                        <p><i class="fa-solid fa-gas-pump"></i> Bahan-bakar : Bensin</p>
                        <p><i class="fa-solid fa-gears"></i> Mesin : 156.9cc</p>
                        <p><i class="fa-solid fa-palette"></i> Warna : Abu-abu</p>
                    </div>
                    <div class="col s6">
                        <p><i class="fa-solid fa-gauge"></i> Speedometer : Digital</p>
                        <p><i class="fa-solid fa-motorcycle"></i> Tipe : Matic</p>
                        <p><i class="fa-solid fa-calendar-days"></i> Tahun Keluaran : 2022</p>
                    </div>
                </div>
                <hr>
                
                <h4 id="review"><strong>Review Motor</strong></h4>
                <p style="text-align: justify">Februari 2020, Honda PCX 160 meluncur untuk gantikan PCX 150. Harganya terkoreksi relatif sedikit dibanding dengan segala kebaruan yang dialaminya. Sasis, mesin hingga ragam fitur baru dikemas dalam tampilan yang juga segar.</p> 
                <p style="text-align: justify">Pembenahan utama terletak di sektor mekanikal. All New Honda PCX 160 pakai mesin generasi terbaru dengan 4-klep bertitelSmart Power plus (eSP+). Kapasitasnya pun meningkat, dari sebelumnya 149 cc menjadi 157 cc. Konstruksi silinder juga tentunya meningkat dari yang tadinya 57,3 x 57,9 mm, menjadi 60 x 55,5 mm. Di atas kertas, kini dirinya bisa melontarkan daya hingga 16 Hp di 8.500 rpm dan torsi 14,7 Nm pada 6.500 rpm. Sementara model sebelumnya, cuma bisa menghasilkan tenaga 14,7 Hp di 8.500 rpm dan melontarkan torsi 13,2 Nm pada 6.500 rpm.</p> 
                <p style="text-align: justify">Honda PCX masuk dalam jajaran skutik premium yang ditawarkan oleh PT Astra Honda Motor (AHM). All New PCX yang beredar sekarang diproduksi di pabrik Honda di Sunter, Jakarta. Ia ditawarkan dalam dua tipe yakni ABS dan CBS. Perbedaan keduanya tentu saja di sektor pengereman.</p>
                <hr>
                
                <h4 id="sk"><strong>Syarat</strong></h4>
                <ul>
                    <li><p>FC KTP, KK ( Aslinya diperlihatkan)</p></li>
                    <li><p>Apabila Penyewa berasal dari luar kota, maka identitas asli harus ditinggalkan dan akan dikembalikan pada saat pengembalian motor</p></li>
                    <li><p>Bersedia di foto</p></li>
                    <li><p>Pembayaran harus lunas dimuka</p></li>
                </ul>
                <h4><strong>Ketentuan</strong></h4>
                <ul>
                    <li><p>Pihak Pemilik memberikan motor dalam kondisi yang baik dan harus dikembalikan dalam kondisi baik juga termasuk kondisi bahan bakar.</p></li>
                    <li><p style="text-align: justify">Pihak Penyewa wajib mengembalikan motor atau mobil sesuai dengan waktu pengembalian dan apabila ingin memperpanjang masa sewa kendaraan maka pihak Penyewa wajib memberitahukan kepada Pemilik minimal 1×24 jam sebelum masa sewa habis.</p></li>
                    <li><p>Pihak Pemilik berhak membatalkan sewa motor atau mobil apabila pemilik menilai pihak penyewa tidak kooperatif atau dinilai dapat membahayakan pemilik.</p></li>
                    <li><p>Pihak Pemilik berhak tidak menyetujui permohonan sewa kendaraan bermotor dengan atau tanpa pemberitahuan alasannya.</p></li>
                </ul>
            </div>
            <hr>
            
            <!-- Contact -->
            <div id="kontak" class="container bg-body-secondary py-3 px-3">
                <div class="container">
                    <h2><strong>Kontak Kami</strong></h2>
                    <i class="fa-solid fa-location-dot"></i> Lokasi : Purwokerto<br>
                    <i class="fa-brands fa-square-whatsapp"></i> Whatsapp : 6282227974000<br>
                    <i class="fa-solid fa-envelope"></i> Email : usmanpamungkas30@gmail.com<br>
                </div>
                <div class="container mt-3 ">
                    <h2><strong>Booking Motor</strong></h2>
                    <p style="margin-top: 5px">Ingin Booking motor tersebut? Isikan data anda dibawah ini...</p>
                    <form method="POST" action="" >
                        <p><div class="mb-3 row">
                            <label for="inputText" style="width: 13rem" class="col-sm-2 col-form-label">Merk Motor</label>
                            <div class="col-sm-10">
                                <input class="form-control" style="width: 20rem" type="text" value="Honda PCX 160" aria-label="readonly input example" readonly>
                            </div>
                        </div></p>
                        <p><div class="mb-3 row">
                            <label for="inputText" style="width: 13rem" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 20rem" class="form-control" id="inputNama">
                            </div>
                        </div></p>
                        <p><div class="mb-3 row">
                            <label for="inputText" style="width: 13rem" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 20rem" class="form-control" id="inputNama">
                            </div>
                        </div></p>
                        <p><div class="mb-3 row">
                            <label for="inputText" style="width: 13rem" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 20rem" class="form-control" id="inputNama">
                            </div>
                        </div></p>
                        <p><div class="mb-3 row">
                            <label for="inputText" style="width: 13rem" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="width: 20rem" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div></p>
                        <p><div class="mb-3 row">
                            <label for="tglPesan" style="width: 13rem" class="col-form-label">Tanggal Pemesanan </label>
                            <div class="col-sm-10">
                                <input type="datetime-local" style="width: 20rem" name="tglPesan" class="form-control" id="tglPesan" required>
                            </div>
                        </div></p>
                        <P><div class="mb-3 row">
                            <label for="tglBalik" style="width: 13rem" class="col-form-label">Tanggal Pengembalian </label>
                            <div class="col-sm-10">
                                <input type="datetime-local" style="width: 20rem" name="tglBalik" class="form-control" id="tglBalik" required>
                            </div>
                        </div></p>
                        <p><div class="mb-3 row">
                            <label for="inputText" style="width: 13rem" class="col-sm-2 col-form-label">Nomor KTP</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 20rem" class="form-control" id="inputNama">
                            </div>
                        </div></p>
                        <P><div class="mb-3 row">
                            <label for="formFile" style="width: 13rem" class="form-label">Foto KTP</label>
                            <div class="col-sm-10">
                                <input class="form-control" style="width: 20rem" type="file" id="formFile">
                            </div>
                        </div></P>
                        <div class="mx-auto">
                            <button type="submit" style="width: 5rem" class="btn btn-secondary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End page content -->
        </div>

        @include('partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <script>
            config = {
                dateFormat: "d-m-Y"
            }

            flatpickr("input[type=datetime-local]", config);
            
            // Script to open and close sidebar when on tablets and phones
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }
            
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
            
            // Slideshow Apartment Images
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
              showDivs(slideIndex += n);
            }
            
            function currentDiv(n) {
              showDivs(slideIndex = n);
            }
            
            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
              }
              x[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " w3-opacity-off";
            }
            </script>
    </body>
</html>    
    
    
    
    
    
    
    
    
    
    