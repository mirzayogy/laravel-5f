@extends('template.default')
@section('content')
    @if (session('berhasil'))
        {{ session('berhasil') }}
        <br>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Prodi ID</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                        @foreach ($banyak_mahasiswa as $mahasiswa)
                            <tr>
                                <td>{{ $mahasiswa['id'] }}</td>
                                <td>{{ $mahasiswa['npm'] }}</td>
                                <td>{{ $mahasiswa['nama_mahasiswa'] }}</td>
                                <td>{{ $mahasiswa['tanggal_lahir'] }}</td>
                                <td>{{ $mahasiswa['prodi_id'] }}</td>
                                <td style="align-items: center">
                                    <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="konfirmasi('{{ route('mahasiswa.destroy', $mahasiswa) }}')"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <form action="" method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function konfirmasi(href) {
            if (confirm('Hapus?')) {
                document.getElementById('deleteForm').action = href
                document.getElementById('deleteForm').submit()
            }
        }
    </script>
@endsection

@push('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endpush
