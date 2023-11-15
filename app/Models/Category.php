<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];


    

    //RELACIÓN UNO A MUCHOS
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }



//coders
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
