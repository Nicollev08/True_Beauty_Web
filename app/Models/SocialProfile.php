<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class SocialProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'social_id',
        'social_name',
        'social_avatar',
    ];

    //UNO A MUCHOS INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }
}
