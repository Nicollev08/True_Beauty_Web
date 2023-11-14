<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'value', 
        'description',
        'option_id'
    ];

    //UNO A MUCHOS INVERSA
    public function option(){
        return $this->belongsTo(Option::class);
    }

    //MUCHOS A MUCHOS
    public function variants(){
        return $this->belongsToMany(Variant::class)
        ->withTimestamps();
    }
}
    