<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Product::factory(100)->create();

    

        $products = [
            [
                'sku' => "22a22b",
                'name' => "Shampoo",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('1.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "1",
            ],
            [
                'sku' => "22a22b",
                'name' => "Polvos",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('2.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "6",
            ],
            [
                'sku' => "22a22b",
                'name' => "Base",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('3.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "6",
            ],
            [
                'sku' => "22a22b",
                'name' => "koko",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('4.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "7",
            ],
            [
                'sku' => "22a22b",
                'name' => "kkk",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('5.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "6",
            ],
            [
                'sku' => "22a22b",
                'name' => "kkk",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('6.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "5",
            ],
            [
                'sku' => "22a22b",
                'name' => "kkk",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('7.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "8",
            ],
            [
                'sku' => "22a22b",
                'name' => "Labial mate",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('8.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "5",
            ],
            [
                'sku' => "22a22b",
                'name' => "UJU",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('9.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "5",
            ],
            [
                'sku' => "22a22b",
                'name' => "KMK",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('10.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "6",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('11.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "8",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('12.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "2",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('13.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "6",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('14.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "6",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('15.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "3",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('16.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "2",
            ],
            [
                'sku' => "22a22b",
                'name' => "Aceite de oliva",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('24.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "3",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('29.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "1",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('31.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "3",
            ],

            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('30.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "1",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('26.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "2",
            ],

            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('1.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "7",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('4.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "8",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('12.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "7",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('15.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "8",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('17.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "7",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('21.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "8",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('35.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "9",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('36.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "9",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('37.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "10",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('38.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "10",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('39.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "10",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('40.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "10",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('34.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "9",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('35.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "10",
            ],
            [
                'sku' => "22a22b",
                'name' => "FRFR",
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, neque porro voluptas atque aliquid maiores labore suscipit pariatur magni! Velit magni dicta asperiores voluptatibus provident. Numquam nam corporis suscipit.",
                'image_path' => $this->storeImage('36.jpg', 'IMG'),
                'price' => "20.580",
                'quantity' => "200",
                'status' => "2",
                'subcategory_id' => "9",
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
        
    }

    protected function storeImage($imageName, $sourceFolder)
    {
        $sourcePath = public_path($sourceFolder . '\\' . $imageName);
        $destinationPath = 'public/products_images/' . $imageName;

        // Almacena la imagen en la carpeta storage
        Storage::put($destinationPath, file_get_contents($sourcePath));

        // Retorna la ruta para almacenar en la base de datos
        return 'products_images/' . $imageName;
    }
}
