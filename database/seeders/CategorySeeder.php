<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category' => 'Fiksi'],
            ['category' => 'Non-Fiksi'],
            ['category' => 'Sains & Teknologi'],
            ['category' => 'Sejarah'],
            ['category' => 'Pendidikan'],
            ['category' => 'Ekonomi & Bisnis'],
            ['category' => 'Kesehatan'],
            ['category' => 'Agama & Spiritualitas'],
            ['category' => 'Seni & Budaya'],
            ['category' => 'Hukum & Politik'],
        ]);
    }
}