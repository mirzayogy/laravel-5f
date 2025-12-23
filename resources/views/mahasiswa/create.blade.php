@extends('template.default')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
        <a href="/dosen" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
                </div>
                <div class="form-group">
                    <label for="nomor_induk_dosen">Nomor Induk Dosen</label>
                    <input type="text" class="form-control" id="nomor_induk_dosen" name="nomor_induk_dosen">
                </div>
                <label for="">Gaji</label>
                <input type="text" name="gaji">
                <br>
                <label for="">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir">
                <br>
                <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fa fa-save fa-sm text-white-50"></i> Simpan
                </button>
            </form>
        </div>
    </div>
@endsection
