<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'image_path',
        'product_id'
    ];

    //RELACION UNO A MUCHOS INVERSA
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //MUCHOS A MUCHOS
    public function features(){
        return $this->belongsToMany(Feature::class)
        ->withTimestamps();
    }

}
