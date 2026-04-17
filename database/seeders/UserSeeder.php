<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'npm'               => 1001,
                'username'          => 'admin',
                'first_name'        => 'Admin',
                'last_name'         => 'Utama',
                'email'             => 'admin@perpustakaan.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('admin123'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'npm'               => 1002,
                'username'          => 'superadmin',
                'first_name'        => 'Super',
                'last_name'         => 'Admin',
                'email'             => 'superadmin@perpustakaan.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('superadmin123'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}