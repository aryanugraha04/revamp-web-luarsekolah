<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            'name' => 'Kartu Prakerja',
            'description' => 'Pelajari berbagai kelas program Prakerja',
            'image' => 'assets/svg/mascot-prakerja.svg',
            'link' => 'https://www.luarsekolah.com/prakerja',
        ]);

        Program::create([
            'name' => 'Belajar Bekerja',
            'description' => 'Tingkatkan skill dan pengalaman kerja',
            'image' => 'assets/svg/mascot-belajarbekerja.svg',
            'link' => 'https://belajarbekerja.com/',
        ]);

        Program::create([
            'name' => 'Prakerja ISW',
            'description' => 'Kelas eksklusif dengan harga terjangkau',
            'image' => 'assets/svg/mascot-isw.svg',
            'link' => 'https://www.luarsekolah.com/indonesia-skills-week',
        ]);
    }
}
