<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil satu user dan satu tag untuk dijadikan foreign key
        $mentor = User::where('role', 'mentor')->first(); // Asumsi sudah ada user di database
        $tag = Tag::first();     // Asumsi sudah ada tag di database

        if ($mentor && $tag) {
            $title = '10 Tips Belajar Laravel Untuk Pemula';
            Article::create([
                'title' => $title,
                'content' => 'Ini adalah isi konten lengkap dari artikel tentang tips belajar Laravel untuk para pemula di tahun 2025. Pastikan untuk mengikuti semua tips yang ada!',
                'image' => '/images/articles/laravel-pemula.jpg',
                'slug' => Str::slug($title), // Membuat slug otomatis dari judul
                'tag_id' => $tag->id,
                'mentor_id' => $mentor->id,
            ]);

            $title2 = 'Pentingnya UI/UX Dalam Pengembangan Produk';
            Article::create([
                'title' => $title2,
                'content' => 'Konten ini membahas mengapa UI/UX menjadi faktor krusial dalam kesuksesan sebuah produk digital. Desain yang baik bukan hanya tentang warna, tetapi juga tentang pengalaman pengguna.',
                'image' => '/images/articles/ui-ux.jpg',
                'slug' => Str::slug($title2),
                'tag_id' => $tag->id,
                'mentor_id' => $mentor->id,
            ]);

            $title3 = 'Satu Langkah di Depan Menuju Karier Impian dengan Belajar Bekerja Bootcamp';
            Article::create([
                'title' => $title3,
                'content' => 'Apakah kamu ingin meningkatkan skill sekaligus mendapatkan peluang karir yang nyata?',
                'image' => 'assets/svg/artikel1.svg',
                'slug' => Str::slug($title3),
                'tag_id' => $tag->id,
                'mentor_id' => $mentor->id,
            ]);

            $title4 = 'Dapatkan potongan harga untuk bulan ini...';
            Article::create([
                'title' => $title4,
                'content' => 'Project-Based Internship adalah program magang virtual dari Belajar Bekerja by Luarsekolah yang dirancang untuk memberikan pengalaman langsung dalam menyelesaikan kasus nyata industri.',
                'image' => 'assets/svg/artikel-promo.svg',
                'slug' => Str::slug($title4),
                'tag_id' => $tag->id,
                'mentor_id' => $mentor->id,
            ]);

            $title5 = 'Luarsekolah & Kampus IELS Selenggarakan Event...';
            Article::create([
                'title' => $title5,
                'content' => 'Webinar ini menghadirkan narasumber Elias E. Ginting, seorang yang sudah berpengalaman di bidang Human Resource.',
                'image' => 'assets/svg/artikel-kolaborasi.svg',
                'slug' => Str::slug($title5),
                'tag_id' => $tag->id,
                'mentor_id' => $mentor->id,
            ]);

            $title6 = 'Work In Motion: Office Experience Day';
            Article::create([
                'title' => $title6,
                'content' => 'Kegiatan ini dilaksanakan secara luring di kantor Luarsekolah dan ditujukan khusus bagi para peserta dari program Project Based Internship Belajar Bekerja Batch 7.',
                'image' => 'assets/svg/artikel-workinmotion.svg',
                'slug' => Str::slug($title6),
                'tag_id' => $tag->id,
                'mentor_id' => $mentor->id,
            ]);
        }
    }
}
