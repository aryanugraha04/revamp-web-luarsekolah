<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil data dummy untuk relasi
        $mentor = User::where('role', 'mentor')->first();
        $category = Category::first();
        $tag = Tag::first();

        // Pastikan data relasi ada sebelum membuat course
        if ($mentor && $category && $tag) {
            $courseName1 = 'Pembuatan Pestisida Ramah Lingkungan untuk Petani Terampil';
            Course::create([
                'name' => $courseName1,
                'description' => 'Pelajari teknik pembuatan pestisida ramah lingkungan yang aman untuk petani terampil.',
                'image' => 'assets/png/prakerja-pesticide.png',
                'slug' => Str::slug($courseName1),
                'total_rating' => 4.9,
                'price' => 1500000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName2 = 'Secure Programming untuk Full-Stack Engineer';
            Course::create([
                'name' => $courseName2,
                'description' => 'Pelajari praktik secure programming untuk mengamankan aplikasi full-stack engineer.',
                'image' => 'assets/png/prakerja-secure-programming.png',
                'slug' => Str::slug($courseName2),
                'total_rating' => 4.9,
                'price' => 1300000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName3 = 'Teknik Pemilahan dan Pengelolaan Sampah';
            Course::create([
                'name' => $courseName3,
                'description' => 'Pelajari teknik pemilahan dan pengelolaan sampah secara efisien.',
                'image' => 'assets/png/prakerja-lingkungan.png',
                'slug' => Str::slug($courseName3),
                'total_rating' => 4.9,
                'price' => 1000000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName4 = 'Membuat Desain Logo untuk Desainer Grafis';
            Course::create([
                'name' => $courseName4,
                'description' => 'Pelajari cara membuat desain logo yang menarik dan profesional untuk desainer grafis.',
                'image' => 'assets/png/prakerja-desain.png',
                'slug' => Str::slug($courseName4),
                'total_rating' => 4.9,
                'price' => 1500000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName5 = 'Menentukan Upah Pekerja untuk UMKM';
            Course::create([
                'name' => $courseName5,
                'description' => 'Pelajari cara menentukan upah pekerja yang kompeten dan terjangkau untuk UMKM.',
                'image' => 'assets/png/prakerja-upah.png',
                'slug' => Str::slug($courseName5),
                'total_rating' => 4.9,
                'price' => 1500000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName6 = 'Menganalisa Perilaku Konsumen untuk Spesialis Pemasaran';
            Course::create([
                'name' => $courseName6,
                'description' => 'Pelajari cara menganalisa perilaku konsumen untuk spesialis pemasaran.',
                'image' => 'assets/png/prakerja-konsumen.png',
                'slug' => Str::slug($courseName6),
                'total_rating' => 4.9,
                'price' => 1500000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName7 = 'Mempelajari Proses Kreatif dalam Siaran Radio';
            Course::create([
                'name' => $courseName7,
                'description' => 'Pelajari cara mempelajari proses kreatif dalam siaran radio.',
                'image' => 'assets/png/prakerja-radio.png',
                'slug' => Str::slug($courseName7),
                'total_rating' => 4.9,
                'price' => 1500000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);

            $courseName8 = 'Teknik Negosiasi bagi Manajer Perusahaan';
            Course::create([
                'name' => $courseName8,
                'description' => 'Pelajari teknik negosiasi bagi manajer perusahaan.',
                'image' => 'assets/png/prakerja-negosiasi.png',
                'slug' => Str::slug($courseName8),
                'total_rating' => 4.9,
                'price' => 1500000,
                'category_id' => $category->id,
                'mentor_id' => $mentor->id,
                'tag_id' => $tag->id,
            ]);
        }
    }
}
