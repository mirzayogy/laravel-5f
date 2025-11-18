<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@if (session('berhasil'))
    {{ session('berhasil') }}
    <br>
@endif
<a href="{{ route('dosen.create') }}">Tambah Data</a>
<table>
    <tr>
        <th>Id</th>
        <th>Nama Dosen</th>
        <th>Nomor Induk</th>
        <th>Gaji</th>
        <th>Tanggal Lahir</th>
        <th>Opsi</th>
    </tr>
    @foreach ($banyak_dosen as $dosen)
        <tr>
            <td> {{ $dosen['id'] }} </td>
            <td> {{ $dosen['nama_dosen'] }} </td>
            <td> {{ $dosen['nomor_induk_dosen'] }} </td>
            <td> {{ $dosen['gaji'] }} </td>
            <td> {{ $dosen['tanggal_lahir'] }} </td>
            <td> @include('dosen.action') </td>
        </tr>
    @endforeach
</table>

<form action="" method="post" id="deleteForm">
    @csrf
    @method('DELETE')
    <input type="submit" value="Hapus" style="display: none">
</form>
<script>
    function konfirmasi(href) {
        if (confirm('Hapus?')) {
            document.getElementById('deleteForm').action = href
            document.getElementById('deleteForm').submit()
        }
    }
</script>
