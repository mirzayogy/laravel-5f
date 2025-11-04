Tambah Data
<form action="{{ route('dosen.store') }}" method="POST">
    @csrf
    @method('POST')
    <br>
    <label for="">Nama Dosen</label>
    <input type="text" name="nama_dosen">
    <br>
    <label for="">Nomor Induk Dosen</label>
    <input type="text" name="nomor_induk_dosen">
    <br>
    <label for="">Gaji</label>
    <input type="text" name="gaji">
    <br>
    <label for="">Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir">
    <br>
    <button type="submit">Simpan</button>
</form>
