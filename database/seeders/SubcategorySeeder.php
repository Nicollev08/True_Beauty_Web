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
                'name' => "Reparación"
            ],
            [
                'category_id' => 1,
                'name' => "Brillo"
            ],
            [
                'category_id' => 1,
                'name' => "Suavidad"
            ],

            //PEPSTAÑAS
            [
                'category_id' => 2,
                'name' => "Punto a punto"
            ],
            [
                'category_id' => 2,
                'name' => "Enteras"
            ],
            //CUERPO
            [
                'category_id' => 3,
                'name' => "Hidratación"
            ],
            [
                'category_id' => 3,
                'name' => "Exfoleante"
            ],
            //UÑAS
            [
                'category_id' => 4,
                'name' => "Postizas"
            ],
            [
                'category_id' => 4,
                'name' => "Esmaltes"
            ],
            
        ];

        foreach($subcategories as $subcategory){
            SubCategory::create($subcategory);
        }
    }
}
    

