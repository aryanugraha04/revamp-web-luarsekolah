<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'Komunitas']);
        Tag::create(['name' => 'Belajar Bekerja']);
        Tag::create(['name' => 'Kolaborasi']);
        Tag::create(['name' => 'Project Based Internship']);
    }
}
