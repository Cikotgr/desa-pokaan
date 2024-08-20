<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        foreach (range(1, 20) as $index) {
            DB::table('produk')->insert([
                'nama' => $faker->sentence,
                'harga' => $faker->randomNumber(5),
                'gambar' => $faker->imageUrl,
                'deskripsi' => $faker->paragraph(8),
                'jenis' => $faker->randomElement(['makanan', 'minuman', 'pakaian']),
                'toko' => $faker->company,
                'no_hp' => $faker->phoneNumber,
                'lokasi' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
