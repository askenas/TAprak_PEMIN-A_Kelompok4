<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //Alfiyanto Ghani Wijaya
    public function run()
    {
        Prodi::create([
            "nama" => "Teknologi Informasi"
        ]);
        Prodi::create([
            "nama" => "Sistem Informasi"
        ]);
        Prodi::create([
            "nama" => "Pendidikan Informasi"
        ]);
        Prodi::create([
            "nama" => "Teknik Komputer"
        ]);
        Prodi::create([
            "nama" => "Teknik Informatika"
        ]);

        Matakuliah::create([
            "nama" => "Pemrograman Dasar"
        ]);
        Matakuliah::create([
            "nama" => "Pemrograman Lanjut"
        ]);
        Matakuliah::create([
            "nama" => "Algoritma dan Struktur Data"
        ]);
        Matakuliah::create([
            "nama" => "Sistem Basis Data"
        ]);
        Matakuliah::create([
            "nama" => "Jaringan Komputer Dasar"
        ]);
    }
}
