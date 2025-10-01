<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Graphic Design',
            'Digital Marketing',
            'Web Development',
            'UI/UX Design',
            'Software Engineering',
            'Social Media Marketing',
            'Marketing Communication',
            'Data Analytic',
            'Content Writing',
            'Accounting'
        ];

        foreach ($categories as $categoryName) {
            Category::create(['name' => $categoryName]);
        }
    }
}
