<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Storage::deleteDirectory('public/categories_images');
        // Storage::deleteDirectory('public/subcategories_images');
        Storage::deleteDirectory('public/products_images');

        // Storage::makeDirectory('public/categories_images');
        // Storage::makeDirectory('public/subcategories_images');
        Storage::makeDirectory('public/products_images');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(SubcategorySeeder::class);

        $this->call(ProductSeeder::class);

        $this->call(DepartmentSeeder::class);

       // $this->call(ColorSeeder::class);

        //$this->call(ColorProductSeeder::class);
    }
}
