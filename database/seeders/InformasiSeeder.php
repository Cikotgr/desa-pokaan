<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        foreach (range(1, 20) as $index) {
            DB::table('informasi')->insert([
                'judul' => $faker->sentence,
                'deskripsi' => $faker->paragraph(100),
                'gambar' => $faker->imageUrl,
                'jenis' => $faker->randomElement(['berita', 'pengumuman', 'agenda']),
                'lokasi' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
