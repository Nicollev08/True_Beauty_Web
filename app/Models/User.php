<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

use App\Models\SocialProfile;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Relacion uno a muchos
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Evento::class, 'userId', 'id');
    }

    //UNO A MUCHOS
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function adminlte_image()
    {
        $social_profile = $this->socialProfiles->first();

        if ($social_profile) {
            return $social_profile->social_avatar;
        } else {
            return 'https://picsum.photos/300/300';
        }
    }

    public function adminlte_desc()
    {
        return "Administrador";
    }

    public function adminlte_profile_url()
    {
        return route('profile.show');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%');
    }

    //UNO A MUCHOS
    public function socialProfiles()
    {
        return $this->hasMany(SocialProfile::class);
    }
}
