Ubah Data
<form action="{{ route('dosen.update', $dosen) }}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <label for="">Nama Dosen</label>
    <input type="text" name="nama_dosen" value="{{ $dosen->nama_dosen }}">
    <br>
    <label for="">Nomor Induk Dosen</label>
    <input type="text" name="nomor_induk_dosen" value="{{ $dosen->nomor_induk_dosen }}">
    <br>
    <label for="">Gaji</label>
    <input type="text" name="gaji" value="{{ $dosen->gaji }}">
    <br>
    <label for="">Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir" value="{{ $dosen->tanggal_lahir }}">
    <br>
    <button type="submit">Simpan</button>
</form>
