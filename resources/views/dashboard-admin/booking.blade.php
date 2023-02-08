@extends('dashboard-admin.layout')
@section('konten')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Pelanggan</h1>
<p class="mb-4"> Tabel pelanggan penyewa motor adalah sebuah tabel yang berisi informasi tentang pelanggan yang menyewa motor. Informasi yang tercantum pada tabel ini antara lain: merk motor yang disewa, nama pelanggan, nomor telepon, email, tanggal pemesanan dan tanggal pengembalian. Tabel ini bisa digunakan oleh pihak rental motor untuk memantau dan mengelola pelanggan dan pemesanan mereka. Dengan adanya tabel pelanggan penyewa motor, pihak rental motor bisa dengan mudah mengetahui siapa saja pelanggan mereka, kapan pelanggan tersebut menyewa motor, dan kapan pengembalianya</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Pelanggan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Merk motor</th>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        <th>Email</th>
                        <th>Tanggal Pesan</th>
                        <th>Tanggal Kembali</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pelanggan as $plg)
                    <tr>
                        <td>{{ $plg->merk }}</td>
                        <td>{{ $plg->nama }}</td>
                        <td>{{ $plg->nomor_hp }}</td>
                        <td>{{ $plg->email }}</td>
                        <td>{{ $plg->tgl_pesan }}</td>
                        <td>{{ $plg->tgl_balik }}</td>
                        <td>
                            <a type="button" href="" class="btn btn-primary btn-sm btn-block">Invoice</a>
                            <form action="/pelanggan/{{ $plg->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm mt-1 btn-block">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection