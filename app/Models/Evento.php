<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;

    const ASESORIA = 1;
    const CITA = 2;

    static $rules = [
        'type'       => 'required',
        'descripcion' => 'required',
        'start'       => 'required'
    ];


    protected $fillable = [
        'service_id',
        'type',
        'descripcion',
        'start',
        'user_id',
        'title'
    ];

    //UNO A MUCHOS INVERSA
    public function service()
    {
        return $this->belongsTo(Service::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
