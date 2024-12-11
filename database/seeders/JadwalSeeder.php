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
    public function run()
    {
        $jadwals = [
            ['kelas_id' => 1, 'guru_id' => 1, 'mata_pelajaran_id' => 1, 'hari' => 'Senin', 'waktu_mulai' => '08:00', 'waktu_selesai' => '10:00'],
            ['kelas_id' => 1, 'guru_id' => 2, 'mata_pelajaran_id' => 2, 'hari' => 'Selasa', 'waktu_mulai' => '09:00', 'waktu_selesai' => '11:00'],
            ['kelas_id' => 2, 'guru_id' => 3, 'mata_pelajaran_id' => 3, 'hari' => 'Rabu', 'waktu_mulai' => '08:00', 'waktu_selesai' => '10:00'],
            ['kelas_id' => 2, 'guru_id' => 4, 'mata_pelajaran_id' => 4, 'hari' => 'Kamis', 'waktu_mulai' => '10:00', 'waktu_selesai' => '12:00'],
            ['kelas_id' => 3, 'guru_id' => 5, 'mata_pelajaran_id' => 5, 'hari' => 'Jumat', 'waktu_mulai' => '08:00', 'waktu_selesai' => '10:00'],
            ['kelas_id' => 3, 'guru_id' => 6, 'mata_pelajaran_id' => 6, 'hari' => 'Sabtu', 'waktu_mulai' => '08:00', 'waktu_selesai' => '10:00'],
        ];

        foreach ($jadwals as $jadwal) {
            Jadwal::create($jadwal);
        }
    }
}
