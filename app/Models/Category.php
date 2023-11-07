<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'icon'
    ];

    //RELACIÓN UNO A MUCHOS
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //RELACIÓN MUCHOS A MUCHOS
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //RELACIÓN a traves de otra relacion
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
