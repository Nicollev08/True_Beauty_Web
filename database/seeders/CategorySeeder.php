<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Cabello',
            'Maquillaje',
            'Cuerpo',
            'Uñas'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        
        }
    }
}
            
        
