<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            DB::table('saran')->insert([
                'nama' => $faker->name,
                'no_hp' => $faker->phoneNumber,
                'pesan' => $faker->sentence(60),
                'status' => rand(0, 1) ? 'read' : 'unread',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
