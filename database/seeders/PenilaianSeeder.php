<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Penilaian;
use App\Models\Murid;
use App\Models\MataPelajaran;
use App\Models\Guru;
use Carbon\Carbon;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $penilaians = [
            ['murid_id' => 1, 'mata_pelajaran_id' => 1, 'guru_id' => 1, 'nilai' => 85, 'deskripsi' => 'Baik', 'tanggal' => '2024-12-01'],
            ['murid_id' => 2, 'mata_pelajaran_id' => 2, 'guru_id' => 2, 'nilai' => 75, 'deskripsi' => 'Cukup', 'tanggal' => '2024-12-02'],
            ['murid_id' => 3, 'mata_pelajaran_id' => 3, 'guru_id' => 3, 'nilai' => 90, 'deskripsi' => 'Sangat Baik', 'tanggal' => '2024-12-03'],
        ];

        foreach ($penilaians as $penilaian) {
            Penilaian::create($penilaian);
        }
    }
}
