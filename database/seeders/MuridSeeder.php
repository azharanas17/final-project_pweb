<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kelas;
use App\Models\Murid;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $murid = [
            ['nama' => 'Ahmad Fauzi', 'nis' => '20021201', 'email' => 'ahmad@example.com', 'kelas_id' => 1],
            ['nama' => 'Budi Santoso', 'nis' => '20021202', 'email' => 'budisan@example.com', 'kelas_id' => 1],
            ['nama' => 'Citra Dewi', 'nis' => '20021203', 'email' => 'citra@example.com', 'kelas_id' => 2],
            ['nama' => 'Dewi Kartika', 'nis' => '20021204', 'email' => 'dewi@example.com', 'kelas_id' => 2],
            ['nama' => 'Eka Prasetya', 'nis' => '20021206', 'email' => 'eka@example.com', 'kelas_id' => 3],
            ['nama' => 'Farhan Maulana', 'nis' => '20021208', 'email' => 'farhan@example.com', 'kelas_id' => 3],
        ];

        foreach ($murid as $dataMurid) {
            Murid::create($dataMurid);
        }
    }
}
