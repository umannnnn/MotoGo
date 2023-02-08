@extends('dashboard-admin.layout')
@section('konten')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Data Motor</h1>
<p class="mb-4"> Form data motor adalah sebuah formulir yang digunakan untuk memasukkan atau mengupdate informasi tentang kendaraan atau motor yang akan disewakan. Form ini biasanya terdiri dari beberapa bidang input, seperti jenis motor, bahan bakar, warna, tahun pembuatan, warna, dan harga sewa per hari.</p>

<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Motor</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <form action="{{ route('dashboard.index') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body col-lg-10">
                    <div class="mb-3">
                        <label for="merkMotor" class="form-label">Merk Motor</label>
                        <input class="form-control" id="merkMotor" name="merkMotor" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Biaya Sewa</label>
                        <input class="form-control" id="harga" name="harga" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="mesin" class="form-label">Kapasitas Mesin</label>
                        <input class="form-control" id="mesin" name="mesin" type="text">
                        <div id="mesinHelp" class="form-text">*Isi kapasitas mesin dengan ukuran CC. ex : 160</div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="bahanBakar" class="form-label">Bahan Bakar</label>
                        <select class="form-select" id="bahanBakar" name="bahanBakar">
                            <option value="1">Bensin</option>
                            <option value="2">Solar</option>
                        </select>
                    </div> --}}
                    <div class="mb-3">
                        <label for="bahanBakar" class="form-label">Bahan Bakar</label>
                        <input class="form-control" id="bahanBakar" name="bahanBakar" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="warna" class="form-label">Warna Motor</label>
                        <input class="form-control" id="warna" name="warna" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="speedometer" class="form-label">Jenis Speedometer</label>
                        <input class="form-control" id="speedometer" name="speedometer" type="text">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe Motor</label>
                        <select class="form-select" id="tipe" name="tipe">
                            <option value="1">Matic</option>
                            <option value="2">Manual</option>
                            <option value="3">Sport</option>
                        </select>
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="tipe" class="form-label">tipe</label>
                        <input class="form-control" id="tipe" name="tipe" type="text">
                    </div> --}}
                    <div class="mb-3">
                        <label for="tipe" class="form-label">tipe</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="tahunKeluaran" class="form-label">Tahun Keluaran</label>
                        <select class="form-select" id="tahunKeluaran" name="tahunKeluaran">
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
                    </div> --}}
                    <div class="mb-3">
                        <label for="tahunKeluaran" class="form-label">tahunKeluaran</label>
                        <input class="form-control" id="tahunKeluaran" name="tahunKeluaran" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Review Motor</label>
                        <textarea id="review" name="review"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img1" class="form-label">Tampak Keseluruhan</label>
                        <input class="form-control" id="img1" name="img1" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="img2" class="form-label">Tampak Depan</label>
                        <input class="form-control" id="img2" name="img2" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="img3" class="form-label">Tampak Belakang</label>
                        <input class="form-control" id="img3" name="img3" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="img4" class="form-label">Tampak Mesin</label>
                        <input class="form-control" id="img4" name="img4" type="file">
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    ClassicEditor
        .create( document.querySelector( '#review' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection