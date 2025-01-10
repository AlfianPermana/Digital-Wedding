<?php

namespace Database\Seeders;

use App\Models\rsv;
use App\Models\wishes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tamu; // Pastikan import model Tamu yang benar

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jika ingin menggunakan factory:
        tamu::factory(100)->create();
        rsv::factory(100)->create();
        wishes::factory(30)->create();

    }
}
