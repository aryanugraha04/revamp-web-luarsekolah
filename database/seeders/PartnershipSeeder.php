<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partnership;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partnership::create([
            'name' => 'Tokopedia',
            'image' => 'assets/png/tokopedia.png',
        ]);

        Partnership::create([
            'name' => 'Flip',
            'image' => 'assets/png/flip.png',
        ]);

        Partnership::create([
            'name' => 'Shopee',
            'image' => 'assets/png/shopee.png',
        ]);

        Partnership::create([
            'name' => 'Wordshelf',
            'image' => 'assets/png/wordshelf.png',  
        ]);

        Partnership::create([
            'name' => 'Hieros',
            'image' => 'assets/png/hieros.png',
        ]);

        Partnership::create([
            'name' => 'Malabar',
            'image' => 'assets/png/malabar.png',
        ]);

        Partnership::create([
            'name' => 'Ayimun',
            'image' => 'assets/png/ayimun.png',
        ]);

        Partnership::create([
            'name' => 'Ptrans',
            'image' => 'assets/png/ptrans.png',
        ]);

        Partnership::create([
            'name' => 'Kartu Prakerja',
            'image' => 'assets/png/kartu-prakerja.png',
        ]);

        Partnership::create([
            'name' => 'Bukalapak',
            'image' => 'assets/png/bukalapak.png',
        ]);
    }
}
