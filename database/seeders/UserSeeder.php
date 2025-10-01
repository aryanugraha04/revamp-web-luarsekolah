<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 1 Admin
        User::create([
            'name' => 'Admin Luar Sekolah',
            'email' => 'admin@luarsekolah.com',
            'password' => Hash::make('password'), // Selalu hash password
            'role' => 'admin',
        ]);

        // Membuat 1 Mentor (PENTING untuk ArticleSeeder)
        User::create([
            'name' => 'Arya',
            'email' => 'arya.mentor@luarsekolah.com',
            'password' => Hash::make('password'),
            'role' => 'mentor',
        ]);

        // Membuat 1 Student
        User::create([
            'name' => 'Siti',
            'email' => 'siti.student@luarsekolah.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
    }
}
