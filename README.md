## Laravel
- Membuat tabel baru dengan 
php artisan make:migration create_dosen_table

- hasilnya:
database/migration/2025_xx_xx_xxxxxx_create_dosen_table.php

- ubah dulu isi filenya

php artisan migrate

php artisan make:migration

==========================================================

php artisan make:model Dosen

protected $table = "dosen";
protected $guarded = [];

==========================================================

php artisan make:seeder DosenSeeder

Dosen::create([
    'nama_dosen' => 'Adul',
    'nomor_induk_dosen' => '001',
    'gaji' => 3000000,
    'tanggal_lahir' => '1998-08-18'
]);

==> DatabaseSeeder.php
$this->call(DosenSeeder::class);

php artisan migrate:fresh // mengulang semua data
php artisan migrate:fresh --seed // sda + memasukkan data dari DatabaseSeeder
php artisan db:seed // memasukkan data dari semua DatabaseSeeder
php artisan db:seed --class=MatakuliahSeeder // data dari semua Seeder 

==========================================================

- MVC = Model View Controller
php artisan make:controller DosenController // kosongan
php artisan make:controller DosenController --resource

- ganti di web.php
Route::resource('/dosen', DosenController::class);

- File DosenController.php
- tambahkan pada method create dan store

- File index.php tambahkan
@if(session('berhasil'))
    Data Berhasil Disimpan
    <br>
@endif
<a href="{{ route("dosen.create") }}">Tambah Data</a>

- Buat file create.blade.php

==========================================================

- Salin file create.blade.php menjadi edit.blade.php dan sesuaikan
- Lengkapi DosenController.php pada method edit dan update

==========================================================
