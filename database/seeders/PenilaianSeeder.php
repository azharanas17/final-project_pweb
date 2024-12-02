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
    public function run(): void
    {
        $murids = Murid::all();
        $mataPelajarans = MataPelajaran::all();
        $gurus = Guru::all();

        foreach ($murids as $murid) {
            foreach ($mataPelajarans as $mataPelajaran) {
                foreach ($gurus as $guru) {
                    Penilaian::create([
                        'murid_id' => $murid->id,
                        'mata_pelajaran_id' => $mataPelajaran->id,
                        'guru_id' => $guru->id,
                        'nilai' => rand(60, 100),
                        'deskripsi' => 'Penilaian untuk mata pelajaran ' . $mataPelajaran->nama,
                        'tanggal' => now(),
                    ]);
                }
            }
        }
    }
}
