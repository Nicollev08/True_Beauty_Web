<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //UNO A MUCHOS
    public function products(){
        return $this->hasMany(Product::class);
    }

    //MUCHOD A MUCHOS
    public function categories(){
        return $this->belongsToMany(Category::class);
    }


}
    

