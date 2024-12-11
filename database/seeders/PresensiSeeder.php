<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Presensi;
use App\Models\Murid;
use App\Models\Jadwal;
use Carbon\Carbon;

class PresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $presensis = [
            ['murid_id' => 1, 'jadwal_id' => 1, 'status' => 'Hadir', 'tanggal' => '2024-12-01'],
            ['murid_id' => 2, 'jadwal_id' => 1, 'status' => 'Alpa', 'tanggal' => '2024-12-01'],
            ['murid_id' => 3, 'jadwal_id' => 2, 'status' => 'Sakit', 'tanggal' => '2024-12-02'],
            ['murid_id' => 4, 'jadwal_id' => 2, 'status' => 'Izin', 'tanggal' => '2024-12-02'],
        ];

        foreach ($presensis as $presensi) {
            Presensi::create($presensi);
        }
    }
}
