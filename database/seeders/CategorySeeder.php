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
            [
                'name' => 'Laptops',
                'image' => 'laptop.png'
            ],
            [
                'name' => 'Smartphones',
                'image' => 'smartphone.png'
            ],
            [
                'name' => 'Tablets',
                'image' => 'tablet.png'
            ],
            [
                'name' => 'Televisions',
                'image' => 'tv.webp'
            ],
            [
                'name' => 'Cameras',
                'image' => 'camera.webp'
            ],
            [
                'name' => 'Audio Devices',
                'image' => 'audio.png'
            ],
            [
                'name' => 'Accessories',
                'image' => 'accessories.webp'
            ],
            [
                'name' => 'Gaming Consoles',
                'image' => 'gaming.webp'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
