<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kelas = [
            ['nama' => '10A', 'wali_kelas_id' => 1],
            ['nama' => '10B', 'wali_kelas_id' => 2],
            ['nama' => '11A', 'wali_kelas_id' => 3],
            ['nama' => '11B', 'wali_kelas_id' => 4],
            ['nama' => '12A', 'wali_kelas_id' => 5],
            ['nama' => '12B', 'wali_kelas_id' => 6],
        ];

        foreach ($kelas as $dataKelas) {
            Kelas::create($dataKelas);
        }
    }
}
