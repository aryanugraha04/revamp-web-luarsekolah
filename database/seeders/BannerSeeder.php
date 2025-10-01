<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'image' => 'assets/svg/pbi-program-1.svg',
            'link' => 'https://pbi.belajarbekerja.com/?utm_source=website&utm_medium=sliderbanner&utm_campaign=comingsoon',
        ]);

        Banner::create([
            'image' => 'assets/svg/pbi-program-2.svg',
            'link' => 'https://pbi.belajarbekerja.com/?utm_source=webbanner&utm_medium=luarsekolah_campaign=promo10',
        ]);

        Banner::create([
            'image' => 'assets/svg/pbi-program-3.svg',
            'link' => 'https://belajarbekerja.com/',
        ]);
    }
}
