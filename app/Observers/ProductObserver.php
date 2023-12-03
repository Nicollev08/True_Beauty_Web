<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductObserver
{
    public function created(Product $product): void
    {
        //
    }

    public function updated(Product $product): void
    {
        //
    }

    public function deleting(Product $product): void
    {
        if ($product->image_path) {
            Storage::delete($product->image_path);
        }
    }

    public function restored(Product $product): void
    {
        //
    }

    public function forceDeleted(Product $product): void
    {
        //
    }
}
