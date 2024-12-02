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
    public function run(): void
    {
        $murid = Murid::all();
        $jadwal = Jadwal::all();

        // Membuat 200 presensi
        foreach (range(1, 200) as $index) {
            Presensi::create([
                'murid_id' => $murid->random()->id,
                'jadwal_id' => $jadwal->random()->id,
                'tanggal' => Carbon::today()->subDays(rand(0, 10)),
                'status' => ['hadir', 'izin', 'sakit', 'alpa'][rand(0, 3)],
                'catatan' => 'Catatan presensi pada tanggal ' . Carbon::today()->subDays(rand(0, 10))->toDateString(),
            ]);
        }
    }
}
