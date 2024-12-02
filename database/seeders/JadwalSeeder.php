<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Guru;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $kelas = Kelas::all();
        $guru = Guru::all();

        // Membuat 30 jadwal untuk setiap kelas
        foreach ($kelas as $k) {
            foreach ($guru as $g) {
                // Membuat 5 jadwal untuk setiap kelas
                foreach (range(1, 5) as $index) {
                    Jadwal::create([
                        'kelas_id' => $k->id,
                        'mata_pelajaran' => $g->mata_pelajaran_id,
                        'guru_id' => $g->id,
                        'hari' => $faker->dayOfWeek,
                        'waktu_mulai' => $faker->time('H:i:s'),
                        'waktu_selesai' => $faker->time('H:i:s'),
                    ]);
                }
            }
        }
    }
}
