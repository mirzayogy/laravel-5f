@extends('template.default')
@section('content')
    @if (session('berhasil'))
        {{ session('berhasil') }}
        <br>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dosen</h1>
        <a href="{{ route('dosen.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Gaji</th>
                        <th>Tanggal Lahir</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                        @foreach ($banyak_dosen as $dosen)
                            <tr>
                                <td>{{ $dosen['id'] }}</td>
                                <td>{{ $dosen['nama_dosen'] }}</td>
                                <td>{{ $dosen['nomor_induk_dosen'] }}</td>
                                <td>{{ $dosen['gaji'] }}</td>
                                <td>{{ $dosen['tanggal_lahir'] }}</td>
                                <td style="align-items: center">
                                    <a href="{{ route('dosen.edit', $dosen) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="konfirmasi('{{ route('dosen.destroy', $dosen) }}')"><i class="fa fa-trash"></i> Hapus</button>
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
