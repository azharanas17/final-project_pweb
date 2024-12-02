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
    public function run(): void
    {
        MataPelajaran::create(['nama' => 'Matematika', 'deskripsi' => 'Pelajaran tentang angka dan rumus-rumus']);
        MataPelajaran::create(['nama' => 'Bahasa Indonesia', 'deskripsi' => 'Pelajaran tentang bahasa Indonesia']);
        MataPelajaran::create(['nama' => 'Fisika', 'deskripsi' => 'Pelajaran tentang fisika dan hukum alam']);
        MataPelajaran::create(['nama' => 'Kimia', 'deskripsi' => 'Pelajaran tentang materi dan reaksi kimia']);
    }
}
