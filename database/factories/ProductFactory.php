<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition(): array
    {
        $sku = $this->faker->unique()->bothify('?##?##?');
        $name = $this->faker->sentence(2);
        $subcategory = Subcategory::all()->random();
        $category = $subcategory->category;

        return [
            'sku' => $sku,
            'name' => $name,
            ///'slug' => Str::slug($name),
            'description' => $this->faker->text(),

            'image_path' => 'products_images/'. $this->faker->image('public/storage/products_images', 640, 480, null, false),
            
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'quantity' => $this->faker->randomNumber(), 
            //'status' => 2,
            'subcategory_id'=> $subcategory->id,
            //'brand_id'=> $brand->id,
            //'quantity' => $quantity
            
        ];
  
    }
}
