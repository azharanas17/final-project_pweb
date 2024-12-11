<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $mataPelajaran = [
            ['nama' => 'Matematika'],
            ['nama' => 'Bahasa Indonesia'],
            ['nama' => 'Bahasa Inggris'],
            ['nama' => 'Fisika'],
            ['nama' => 'Kimia'],
            ['nama' => 'Biologi'],
        ];

        foreach ($mataPelajaran as $pelajaran) {
            MataPelajaran::create($pelajaran);
        }
    }
}
