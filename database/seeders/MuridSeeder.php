<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kelas;
use App\Models\Murid;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $kelas = Kelas::all();

        // Membuat 50 murid dengan data dummy
        foreach (range(1, 50) as $index) {
            Murid::create([
                'nama' => $faker->name,
                'nis' => $faker->unique()->numerify('##########'),
                'email' => $faker->unique()->safeEmail,
                'telepon' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'kelas_id' => $kelas->random()->id,
            ]);
        }
    }
}
