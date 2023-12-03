<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //UNO A MUCHOS INVERSA
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', '%' . $search . '%');
    }
}


    // //UNO A MUCHOS INVERSA
    // public function brand(){
    //     return $this->belongsTo(Brand::class);
    // }

    // //MUCHOS A MUCHOS 
    // public function colors(){
    //     return $this->belongsToMany(Color::class);
    // }

    // //uno a muchos polimorfica
    // public function images(){  
    //     return $this->morphMany(Image::class, "imageable");
    // }
