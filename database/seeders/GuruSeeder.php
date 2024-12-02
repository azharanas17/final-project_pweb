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
    public function run(): void
    {
        $faker = Faker::create();
        $mataPelajaran = MataPelajaran::all();

        // Membuat 10 data guru
        foreach (range(1, 10) as $index) {
            Guru::create([
                'nama' => $faker->name,
                'nip' => $faker->unique()->numerify('###########'),
                'email' => $faker->unique()->safeEmail,
                'telepon' => $faker->phoneNumber,
                'mata_pelajaran_id' => $mataPelajaran->random()->id,
            ]);
        }
    }
}
