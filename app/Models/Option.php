<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type'
    ];


    //MUCHOS A MUCHOS
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->wherePivot('value')
            ->withTimestamps();
    }
    //RELACION UNO A MUCHOS
    public function features(){
        return $this->hasMany(Feature::class);
    }
}
