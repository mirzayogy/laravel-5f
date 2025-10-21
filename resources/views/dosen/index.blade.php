<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
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
