<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nama_dosen' => 'Adul',
            'nomor_induk_dosen' => '001',
            'gaji' => 3000000,
            'tanggal_lahir' => '1998-08-18'
        ]);
        Dosen::create([
            'nama_dosen' => 'Bejo',
            'nomor_induk_dosen' => '002',
            'gaji' => 3100000,
            'tanggal_lahir' => '1995-05-18'
        ]);
        Dosen::create([
            'nama_dosen' => 'Coki',
            'nomor_induk_dosen' => '003',
            'gaji' => 2700000,
            'tanggal_lahir' => '2000-05-09'
        ]);
    }
}
