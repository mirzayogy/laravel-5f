<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'npm' => '0001',
            'nama_mahasiswa' => 'Ahmad',
            'tanggal_lahir' => '2000-05-01',
            'prodi_id' => 1,
        ]);

        Mahasiswa::create([
            'npm' => '0002',
            'nama_mahasiswa' => 'Mei',
            'tanggal_lahir' => '2000-05-02',
            'prodi_id' => 1,
        ]);

        // $table->string('npm');
        // $table->string('nama_mahasiswa');
        // $table->date('tanggal_lahir');
        // $table->integer('prodi_id');
    }
}
