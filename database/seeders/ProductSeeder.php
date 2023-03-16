<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {   for ($i = 0; $i<13; $i++)
        Product::query()->create([
            'title' => 'Зонт для самообороны "Всё нипочем!"',
            'description' => 'Наш зонт для самообороны ВСЕ НИПОЧЕМ',
            'price' => 14500,
            'image_path' => 'public/images/default-img.jpg',
            'is_published' => true,
        ]);
    }
}
