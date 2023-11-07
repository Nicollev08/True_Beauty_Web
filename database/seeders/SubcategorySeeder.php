<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            //Cabello
            [
                'category_id' => 1,
                'name' => "Reparación",
                'slug' => Str::slug('Cabello-peinados'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => "Brillo",
                'slug' => Str::slug('Cabello-Brillo'),
            ],
            [
                'category_id' => 1,
                'name' => "Suavidad",
                'slug' => Str::slug('Cabello-Suavidad'),
            ],

            //PEPSTAÑAS
            [
                'category_id' => 2,
                'name' => "Punto a punto",
                'slug' => Str::slug('Pestañas Punto a punto'),
            ],
            [
                'category_id' => 2,
                'name' => "Enteras",
                'slug' => Str::slug('Pestañas enteras'),
            ],
            //CUERPO
            [
                'category_id' => 3,
                'name' => "Hidratación",
                'slug' => Str::slug('Cuerpo hidratacion'),
            ],
            [
                'category_id' => 3,
                'name' => "Exfoleante",
                'slug' => Str::slug('Cuerpo exfoleantes'),
            ],
            //UÑAS
            [
                'category_id' => 4,
                'name' => "Postizas",
                'slug' => Str::slug('Uñas postizas'),
            ],
            [
                'category_id' => 4,
                'name' => "Esmaltes",
                'slug' => Str::slug('Esmaltes'),
            ],
            
        ];

        foreach($subcategories as $subcategory){
            SubCategory::factory(1)->create($subcategory);
        }
    }
}
    

