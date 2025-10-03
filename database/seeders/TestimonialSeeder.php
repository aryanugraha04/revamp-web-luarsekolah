<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Saeful Rizal',
            'position' => 'Junior Graphic Designer di Telkomsel',
            'content' => '"Sebelum ikut kelas Graphic Design di LuarSekolah, saya hanya bisa desain sederhana untuk kebutuhan pribadi. Setelah belajar, saya berhasil membangun portofolio profesional dan mendapatkan 3 proyek freelance pertama saya hanya dalam 2 bulan. Materi yang diajarkan sangat relevan dengan kebutuhan industri."',
            'category' => 'Graphic Designer',
            'achievement' => '4X',
            'achievement_description' => 'Peningkatan Portofolio dan Kesempatan Kerja',
            'avatar_url' => 'assets/png/saeful.png',
        ]);

        Testimonial::create([
            'name' => 'Andi Prasetiyo',
            'position' => 'Graphic Designer, Startup Tech Bandung',
            'content' => '“Kelas Graphic Design di LuarSekolah membuat saya jauh lebih percaya diri. Saya belajar tools industri seperti Photoshop & Illustrator, juga bagaimana membuat desain yang komunikatif. Sekarang, saya dipercaya menjadi designer tetap di perusahaan startup lokal.”',
            'category' => 'Graphic Design',
            'achievement' => '4X',
            'achievement_description' => 'Lebih Percaya Diri dalam Skill Desain',
            'avatar_url' => 'assets/png/andi.png',
        ]);

        Testimonial::create([
            'name' => 'Arya Nugraha',
            'position' => 'Full Stack Developer',
            'content' => '“Kursus Software Engineering di LuarSekolah sangat komprehensif. Dari nol hingga mahir, saya diajarkan best practices dan clean code. Sekarang saya bekerja sebagai Full Stack Developer di perusahaan teknologi ternama.”',
            'category' => 'Software Engineering',
            'achievement' => '4X',
            'achievement_description' => 'Peningkatan Skill dan Kesempatan Kerja',
            'avatar_url' => 'assets/png/arya.png',
        ]);

        Testimonial::create([
            'name' => 'Siti Nurhasanah',
            'position' => 'Social Media Manager',
            'content' => '“Belajar Social Media Marketing di LuarSekolah mengubah cara pandang saya tentang digital marketing. Strategi yang diajarkan sangat aplikatif dan hasilnya terlihat dalam 2 minggu pertama implementasi.”',
            'category' => 'Social Media Marketing',
            'achievement' => '4X',
            'achievement_description' => 'Peningkatan Skill dan Kesempatan Kerja',
            'avatar_url' => 'assets/png/siti.png',
        ]);
    }
}
