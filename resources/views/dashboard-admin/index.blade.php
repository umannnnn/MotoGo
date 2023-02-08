@extends('dashboard-admin.layout')
@section('konten')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Motor</h1>
<p class="mb-4"> Tabel motor yang akan disewakan adalah sebuah tabel yang berisi informasi tentang kendaraan atau motor yang tersedia untuk disewakan. Informasi yang tercantum pada tabel ini antara lain: merk motor, bahan bakar, warna, speedometer, tipe, dan tahun keluaran. Tabel ini bisa digunakan oleh pihak rental motor untuk memantau dan mengelola armada kendaraan mereka.</p>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Motor</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Merk motor</th>
                        <th>Bahan bakar</th>
                        <th>Warna</th>
                        <th>Speedometer</th>
                        <th>Tipe</th>
                        <th>Tahun Keluaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($motor as $mtr)
                    <tr>
                        <td>{{ $mtr->merkMotor }}</td>
                        <td>{{ $mtr->bahanBakar }}</td>
                        <td>{{ $mtr->warna }}</td>
                        <td>{{ $mtr->speedometer }}</td>
                        <td>{{ $mtr->category->name }}</td>
                        <td>{{ $mtr->tahunKeluaran }}</td>
                        <td>
                            <a type="button" href="/dashboard/{{ $mtr->id }}/edit" class="btn btn-primary btn-sm btn-block">Edit</a>
                            <form action="/dashboard/{{ $mtr->id }}" method="POST">
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

