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
            [
                'name' => 'Cabello',
                'slug' => Str::slug('Cabello'),
                'icon' => '<i class="fa-solid fa-scissors"></i>'
            ],
            [
                'name' => 'Pestañas',
                'slug' => Str::slug('Pestañas'),
                'icon' => '<i class="fa-solid fa-eye"></i>'
            ],
            [
                'name' => 'Cuerpo',
                'slug' => Str::slug('Cuerpo'),
                'icon' => '<i class="fa-solid fa-person-dress"></i>'
            ],
            [
                'name' => 'Uñas',
                'slug' => Str::slug('Uñas'),
                'icon' => '<i class="fa-solid fa-wand-magic-sparkles"></i>'
            ]
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create(); //genera 4 marcas para cada categoria

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
            
        
