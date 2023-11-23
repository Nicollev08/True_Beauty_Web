<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;
    
    static $rules = [
        'title'       => 'required',
        'descripcion' => 'required',
        'start'       => 'required',
        'end'         => 'required',
    ];


    protected $fillable = [
        'title',
        'descripcion',
        'start',
        'end',
        'userId'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

}
