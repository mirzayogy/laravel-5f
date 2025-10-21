<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::create([
            'kode' => 'MK01',
            'nama_matakuliah' => 'Algo 1',
            'jumlah_sks' => 3
        ]);
        Matakuliah::create([
            'kode' => 'MK02',
            'nama_matakuliah' => 'PPN 1',
            'jumlah_sks' => 3
        ]);
        Matakuliah::create([
            'kode' => 'MK03',
            'nama_matakuliah' => 'Pancasila',
            'jumlah_sks' => 3
        ]);
    }
}
