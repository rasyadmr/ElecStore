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
            ['name' => 'Laptops'],
            ['name' => 'Smartphones'],
            ['name' => 'Tablets'],
            ['name' => 'Televisions'],
            ['name' => 'Cameras'],
            ['name' => 'Audio Devices'],
            ['name' => 'Accessories'],
            ['name' => 'Gaming Consoles'],
            ['name' => 'Smart Home Devices'],
            ['name' => 'Computer Accessories'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
