<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Guru;
use App\Models\MataPelajaran;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $guru = [
            ['nama' => 'Budi Santoso', 'nip' => '10021201', 'email' => 'budi@example.com', 'mata_pelajaran_id' => 1],
            ['nama' => 'Ani Setiani', 'nip' => '10021202', 'email' => 'ani@example.com', 'mata_pelajaran_id' => 2],
            ['nama' => 'Rudi Hartono', 'nip' => '10021203', 'email' => 'rudi@example.com', 'mata_pelajaran_id' => 3],
            ['nama' => 'Siti Rahmawati', 'nip' => '10021205', 'email' => 'siti@example.com', 'mata_pelajaran_id' => 4],
            ['nama' => 'Andi Permana', 'nip' => '10021207', 'email' => 'andi@example.com', 'mata_pelajaran_id' => 5],
            ['nama' => 'Lina Kusuma', 'nip' => '10021211', 'email' => 'lina@example.com', 'mata_pelajaran_id' => 6],
        ];

        foreach ($guru as $dataGuru) {
            Guru::create($dataGuru);
        }
    }
}
