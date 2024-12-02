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
    public function run(): void
    {
        // Membuat 6 kelas
        Kelas::create([
            'nama' => 'X-A',
            'deskripsi' => 'Kelas 10-A, IPA',
        ]);

        Kelas::create([
            'nama' => 'X-B',
            'deskripsi' => 'Kelas 10-B, IPA',
        ]);

        Kelas::create([
            'nama' => 'X-C',
            'deskripsi' => 'Kelas 10-C, IPS',
        ]);

        Kelas::create([
            'nama' => 'XI-A',
            'deskripsi' => 'Kelas 11-A, IPA',
        ]);

        Kelas::create([
            'nama' => 'XI-B',
            'deskripsi' => 'Kelas 11-B, IPS',
        ]);

        Kelas::create([
            'nama' => 'XII-A',
            'deskripsi' => 'Kelas 12-A, IPA',
        ]);
    }
}
